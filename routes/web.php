<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio.index');
});

Route::get('logout', function () {
          Auth::logout();
          return redirect('/');
});

// Route::get('/admin', [
// 					'middleware' => 'permiso',
// 					'uses' => 'AdminController@index'
// 				]);


Route::get('home', function () {
    return view('inicio.index');
});
Route::resource('usuario','UserController');
Route::get('pokemon','ImportController@import');
Route::post('acceder', [ 'as' => 'acceder', 'uses' => 'UserController@login']);
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'permiso'], function()
{
    Route::get('/', [
        'uses' => 'PrincipalController@index'
    ]);

    Route::get('usuarios.adm', [
        'uses' => 'PrincipalController@usuarios'
    ]);
    Route::get('/categorias/crear-categoria.adm', [
        'uses' => 'CategoriaController@create'
    ]);
    Route::resource('pokemon','PokemonController');
    Route::get('pokemons.adm', [
        'uses' => 'PokemonController@index'
    ]);
    Route::resource('categoria','CategoriaController');
});
