<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

class CategoriasController extends Controller
{
   
    public function index()
    {
        //
        $categorias = Categorias::get();
        return [
            'categotias'=> $categorias
        ];
    }

    public function store(Request $request)
    {
        //
        $categorias = new Categorias();
        $categorias->nombre= $request->nombre;
 
        $categorias->save();
    }
   
    public function update(Request $request)
    {
        //
        $categorias = Categorias::findOrFail($request->id_categoria);
        $categorias->nombre= $request->nombre;
 
        $categorias->save();
     
    }

    public function destroy(Request $request)
    {
        //
        $categorias = Categorias::findOrFail($request->id_categoria);
        
        $categorias->delete();
    }
}
