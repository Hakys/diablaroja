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
}
