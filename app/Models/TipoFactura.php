<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoFactura extends Model
{
    use HasFactory;

    protected $fillable = [
        "operacion_id","name","slug","icon"
    ];

    //Relación 1:M padre
    public function operacion(){
        return $this->belongsTo(Operacion::class);
    }

    //Relación 1:M hijos
    public function facturas(){
        return $this->hasMany(Factura::class);
    }

    //Relación 1:M hijos
    public function facturantes(){
        return $this->hasMany(facturantes::class);
    }

    //Relación 1:M hijos
    public function conceptos(){
        return $this->hasMany(Concepto::class);
    }

    //URL amigable
    public function getRouteKeyName(){
        return 'slug';
    }
}
