<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturante extends Model
{
    use HasFactory;

    protected $guarded = [
        "id","created_at","updated_at"
    ];

    //Relación N:M padre
    public function tipo_facturas(){
        return $this->belongsToMany(TipoFactura::class,'direccion_facturante');
    }
    
    //Relación N:M
    public function direccions(){
        return $this->belongsToMany(Direccion::class);
    }
    /*
    //Relación 1:M hijos
    public function emisors(){
        return $this->hasMany(EmisorReceptor::class,'emisor');
    }

    //Relación 1:M hijos
    public function receptors(){
        return $this->hasMany(EmisorReceptor::class,'receptor');
    }

    
/*
    //Relación 1:M nietos
    public function facturas_emisor(){
        return $this->hasManyThrough(EmisorReceptor::class, Factura::class);
    }

    //Relación 1:M nietos
    public function facturas_receptor(){
        return $this->hasManyThrough(EmisorReceptor::class, Factura::class);
    }

    //Relación 1:M nietos
    public function proveedor(){
        return $this->hasManyThrough(EmisorReceptor::class, Proveedor::class);
    }
*/
    //URL Amigable
    public function getRouteKeyName(){
        return 'id';
    }

    public function __invoke(){
        $facturantes = Facturante::all();
        return view('facturantes.show',compact('facturantes'));
    }
}
