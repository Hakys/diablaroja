<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controlpanel extends Model
{
    use HasFactory;

    public function __invoke(){
        $operaciones = Operacion::all();
        $tipos = Tipo::all();
        $estados = Estado::all();
        $conceptos = Concepto::all();
        $mensajerias = Mensajeria::all();
        $pagos = Pago::all();
        return view('controlpanel.show',compact('operaciones','tipos','estados','conceptos','mensajerias','pagos'));
    }
}
