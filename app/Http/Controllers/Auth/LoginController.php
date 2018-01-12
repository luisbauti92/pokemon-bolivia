<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use App\Account;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $userSocial = Socialite::driver('facebook')->user();

        //return dd($userSocial);
        $findAccount = Account::where('email',$userSocial->email)->first();
        if($findAccount){
          Auth::login($findAccount->user);
          return redirect('/');
        }else{
          $user = new User;
          $user->nombre = $userSocial->name;

          if($userSocial->email){
            $user->email= $userSocial->email;
          }else{
            $user->email=$userSocial->id;
          }
          $user->password= bcrypt(123456);
          $user->tipo= 3;
          $user->avatar=$userSocial->avatar;
          $user->nickname=$userSocial->name;
          $user->save();
          $account=new Account;
          $account->nombre=$user->nombre;
          $account->nickname=$user->nickname;
          $account->email=$user->email;
          $account->avatar=$userSocial->avatar;
          $account->urlperfil=$userSocial->profileUrl;
          $user->account()->save($account);
          Auth::login($user);
          return redirect('/');
        }


    }
}
