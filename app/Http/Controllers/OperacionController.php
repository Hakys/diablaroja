<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operacion;

class OperacionController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Operacion $operacion)
    {
        $operaciones = Operacion::all();
        return view('operacions.show',compact('operacion','operaciones'));    
    }
}
