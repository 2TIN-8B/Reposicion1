<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class proveedorController extends Controller
{
    public function index(){
        return view('proveedor');
    }
// ------------------------------------------------------------------
    public function crear(Request $request){
        $nvoProveedor = new proveedor();
        $nvoProveedor->nombre = $request->input('nombre');
        $nvoProveedor->apellido = $request->input('fecharegistro');
        $nvoProveedor->telefono = $request->input('telefono');
        $nvoProveedor->correo = $request->input('correo');        

        $nvoProveedor-> save();

        $proveedor= proveedor::all();
        return redirect('/principal');
    } 

    public function mostrar(){
        $proveedores = proveedor::all();
        return view('verproveedor', compact('proveedores'));
    }
// ------------------------------------------------------------------
    public function guardar(Request $request){

        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $telefono = $request->input('telefono');
        $correo = $request->input('correo');

        $proveedor = new Proveedor();

        $proveedor->nombre = $nombre;
        $proveedor->apellido = $apellido;
        $proveedor->telefono = $telefono;
        $proveedor->correo = $correo;

        $proveedor->save();

        return redirect('/principal');
    } 
}
