<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamopeliculas;

class PrestamopeliculasController extends Controller
{
    public function index()
    {
        //
        $prestamopeliculas= Prestamopeliculas::get();
        return[
            'prestamopeliculas'=>$prestamopeliculas
        ];
    }

   
    public function store(Request $request)
    {
        //
        $prestamopeliculas = new Prestamopeliculas();
        $prestamopeliculas->id_cliente= $request->id_cliente;
        $prestamopeliculas->id_pelicula= $request->id_pelicula;
        $prestamopeliculas->fecha_prestada= $request->fecha_prestada;

        $prestamopeliculas->save();
    }

   
    public function update(Request $request)
    {
        //
        $prestamopeliculas = Prestamopeliculas::findOrFail($request->id_peliprest);
        $prestamopeliculas->id_cliente= $request->id_cliente;
        $prestamopeliculas->id_pelicula= $request->id_pelicula;
        $prestamopeliculas->fecha_prestada= $request->fecha_prestada;

        $prestamopeliculas->save();
    }

  
    public function destroy(Request $request)
    {
        //
        $prestamopeliculas = Prestamopeliculas::findOrFail($request->id_peliprest);

        $prestamopeliculas->delete();
    }
}
