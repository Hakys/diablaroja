<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    use HasFactory;

    protected $fillable = [
        "name","slug","icon","color"
    ];

    //Relación 1:M hijos
    public function contactos(){
        return $this->hasMany(Contacto::class);
    }

    //Relación 1:M hijos
    public function tipos(){
        return $this->hasMany(Tipo::class);
    }

    //Relación 1:M hijos
    public function conceptos(){
        return $this->hasMany(Concepto::class);
    }

    //Relación 1:M nietos
    public function facturas(){
        return $this->hasManyThrough(Factura::class, TipoFactura::class);
    }

    //Relación 1:M nietos
    public function facturantes(){
        return $this->hasManyThrough(Facturante::class, TipoFactura::class);
    }

    //URL amigable
    public function getRouteKeyName(){
        return 'slug';
    }
}
