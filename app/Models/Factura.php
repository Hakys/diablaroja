<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    //URL Amigable
    public function getRouteKeyName(){
        return 'num_factura';
    }

    public function __invoke(){
        $facturas = Factura::all();
        return view('facturas.show',compact('facturas'));
    }

    //Relación 1:M padre
    public function operacion(){
        return $this->belongsTo(Operacion::class);
    }

    //Relación 1:M padre
    public function emisor(){
        return $this->belongsTo(Direccion::class,'emisor_id');
    }

    //Relación 1:M padre
    public function receptor(){
        return $this->belongsTo(Direccion::class,'receptor_id');
    }
    
    //Relación 1:M padre
    public function concepto(){
        return $this->belongsTo(Concepto::class);
    }
    
    //Relación 1:M padre
    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    //Relación N:M
    public function envios(){
        return $this->belongsToMany(Mensajeria::class)->withPivot(['seguimiento','total']);
    }

    //Relación N:M
    public function pagos(){
        return $this->belongsToMany(Pago::class)->withPivot(['total']);
    }
}
