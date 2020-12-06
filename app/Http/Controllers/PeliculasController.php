<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peliculas;

class PeliculasController extends Controller
{
    public function index()
    {
        //
        $peliculas= Peliculas::get();
        return[
            'pelicula'=>$peliculas
        ];
    }

  
    public function store(Request $request)
    {
        //
        $peliculas = new Peliculas();
        $peliculas->nombre= $request->nombre;
        $peliculas->id_categoria= $request->id_categoria;
        $peliculas->puntuacion= $request->puntuacion;
        $peliculas->precio= $request->precio;

        $peliculas->save();
    }

    
    public function update(Request $request)
    {
        //
        $peliculas = Peliculas::findOrFail($request->id_pelicula);
        $peliculas->nombre= $request->nombre;
        $peliculas->id_categoria= $request->id_categoria;
        $peliculas->puntuacion= $request->puntuacion;
        $peliculas->precio= $request->precio;
        
        $peliculas->save();
    }

  
    public function destroy(Request $request)
    {
        //
        $peliculas = Peliculas::findOrFail($request->id_pelicula);

        $peliculas->delete();
    }
}
