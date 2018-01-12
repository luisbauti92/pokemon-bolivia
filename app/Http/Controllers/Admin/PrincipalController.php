<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class PrincipalController extends Controller
{
      public function index(){
          //return "admin logueado";
          return view('admin.index');
      }
      public function usuarios(){
          //return "admin logueado";
          $usuarios = User::all();
          return view('admin.usuarios.index', compact('usuarios'));
      }
      public function categorias(){
          return "categoria";
          // $usuarios = User::all();
          // return view('admin.usuarios.index', compact('usuarios'));
      }
}
