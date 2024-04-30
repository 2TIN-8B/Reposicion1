<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class empleadoController extends Controller
{
    public function index(){
        return view('empleado');
    }
// ------------------------------------------------------------------
    public function crear(Request $request){
        $nvoEmpleado = new empleado();
        $nvoEmpleado->nombre = $request->input('nombre');
        $nvoEmpleado->apellido = $request->input('apellido');
        $nvoEmpleado->fechaingreso = $request->input('fechaIngreso');
        $nvoEmpleado->salario = $request->input('salario');        

        $nvoEmpleado-> save();

        $empleado= empleado::all();
        return redirect('/principal');
    } 

    public function mostrar(){
        $empleados = empleado::all();
        return view('verempleado', compact('empleados'));
    }
// ------------------------------------------------------------------
    public function guardar(Request $request){

        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $fechaingreso = $request->input('fechaingreso');
        $salario = $request->input('salario');

        $empleado = new Empleado();

        $empleado->nombre = $nombre;
        $empleado->apellido = $apellido;
        $empleado->fechaingreso = $fechaingreso;
        $empleado->salario = $salario;

        $empleado->save();

        return redirect('/principal');
    } 
}
