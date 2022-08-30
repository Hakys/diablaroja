<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    //Relación N:M padre
    public function tipo_facturas(){
        return $this->belongsToMany(TipoFactura::class,'direccion_facturante')->withPivot('direccion_id');
    }
    
    //Relación N:M
    public function facturantes(){
        return $this->belongsToMany(Facturante::class,'direccion_facturante')->withPivot('tipo_factura_id');
    }
}
