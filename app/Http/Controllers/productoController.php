<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class productoController extends Controller
{
    public function index(){
        return view('producto');
    }
// ------------------------------------------------------------------
    public function crear(Request $request){
        $nvoProducto = new producto();
        $nvoProducto->descripcion = $request->input('descripcion');
        $nvoProducto->precio = $request->input('precio');
        $nvoProducto->stock = $request->input('stock');
        $nvoProducto->pagaisv = $request->input('pagaisv');        

        $nvoProducto-> save();

        $producto= producto::all();
        return redirect('/principal');
    } 

    public function mostrar(){
        $productos = producto::all();
        return view('verproducto', compact('productos'));
    }
// ------------------------------------------------------------------
    public function guardar(Request $request){

        $descripcion = $request->input('descripcion');
        $precio = $request->input('precio');
        $stock = $request->input('stock');
        $pagaisv = $request->input('pagaisv');

        $producto = new Producto();

        $producto->descripcion = $descripcion;
        $producto->precio = $precio;
        $producto->stock = $stock;
        $producto->pagaisv = $pagaisv;

        $producto->save();

        return redirect('/principal');
    } 
}
