<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    use HasFactory;

    protected $fillable = [
        "operacion_id","name","slug"
    ];

    //Relación 1:M padre
    public function operacion(){
        return $this->belongsTo(Operacion::class);
    }

    //Relación 1:M hijos
    public function facturas(){
        return $this->hasMany(Factura::class);
    }
}
