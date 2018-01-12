<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoria;
use App\Categoria;
use Session;
class CategoriaController extends Controller
{
    public function CrearForm(){
        return "formulario";
    }
    public function create()
    {
        return view('admin.categorias.crear');
    }
    public function store(StoreCategoria $request)
    {
        $c = new Categoria;
        $c->nombre=$request['nombre'];
        if($c->save()){
          Session::flash('msg-ok','Se ha registrado correctamente');
          return back();
        }
        else{
            return back();
        }

    }
}
