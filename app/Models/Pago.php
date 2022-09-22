<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    //Relación N:M
    public function facturas(){
        return $this->belongsToMany(Factura::class)->withPivot(['total']);
    }
}
