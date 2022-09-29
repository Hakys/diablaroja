<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function __invoke(){
        $productos = Producto::all();
        return view('productos.all',compact('productos'));
    }

    public function show($referencia){
        
        $producto = Producto::where('referencia','like',"%".$referencia."%")->first();
        return view('productos.show',compact('producto'));
    }
}
