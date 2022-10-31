<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    //Relación 1:M padre
    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }

    //Relación 1:M padre
    public function contacto(){
        return $this->belongsTo(Contacto::class);
    }

    //Relación 1:M hijos
    public function facturas_emitidas(){
        return $this->hasMany(Factura::class,'emisor_id');
    }

    //Relación 1:M hijos
    public function facturas_recibidas(){
        return $this->hasMany(Factura::class,'receptor_id');
    }

    /*
    //Relación N:M
    public function facturantes(){
        return $this->belongsToMany(Facturante::class,'direccion_facturante')->withPivot('tipo_factura_id');
    }
    */
}
