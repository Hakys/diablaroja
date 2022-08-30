<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Operacion;

class Controlpanel extends Model
{
    use HasFactory;

    public function __invoke(){
        $operaciones = Operacion::all();
        $tipofacturas = TipoFactura::all();
        $estados = Estado::all();
        $conceptos = Concepto::all();
        return view('controlpanel.show',compact('operaciones','tipofacturas','estados','conceptos'));
    }
}
