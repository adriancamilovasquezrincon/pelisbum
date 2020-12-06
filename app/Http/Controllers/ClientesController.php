<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ClientesController extends Controller
{
   
    public function index()
    {
        //
        $clientes= Clientes::get();
        return[
            'clientes'=>$clientes
        ];
    }

    public function store(Request $request)
    {
        //
        $clientes = new Clientes();
        $clientes->num_cedula= $request->num_cedula;
        $clientes->nombres= $request->nombres;
        $clientes->apellidos= $request->apellidos;
        $clientes->direccion= $request->direccion;
        $clientes->telefono= $request->telefono;
        $clientes->email= $request->email;
        $clientes->genero= $request->genero;

        $clientes->save();
    }

  
  
    public function update(Request $request)
    {
        //
        $clientes = Clientes::findOrFail($request->id_cliente);
        $clientes->num_cedula= $request->num_cedula;
        $clientes->nombres= $request->nombres;
        $clientes->apellidos= $request->apellidos;
        $clientes->direccion= $request->direccion;
        $clientes->telefono= $request->telefono;
        $clientes->email= $request->email;
        $clientes->genero= $request->genero;

        $clientes->save();
    }

  
    public function destroy(Request $request)
    {
        //
        $clientes = Clientes::findOrFail($request->id_cliente);

        $clientes->delete();
    }
}
