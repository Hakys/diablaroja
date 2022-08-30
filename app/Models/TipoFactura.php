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
/*
    //Relación 1:M hijos
    public function facturantes(){
        return $this->hasMany(Facturantes::class);
    }
*/ 
    //Relación 1:M hijos
    public function conceptos(){
        return $this->hasMany(Concepto::class);
    }
           
    //Relación N:M padre
    public function facturantes(){
        return $this->belongsToMany(Facturante::class,'direccion_facturante')->withPivot('direccion_id');
    }
    
    //Relación N:M
    public function direccions(){
        return $this->belongsToMany(Direccion::class,'direccion_facturante')->withPivot('facturante_id');
    }

    //URL amigable
    public function getRouteKeyName(){
        return 'slug';
    }
}
