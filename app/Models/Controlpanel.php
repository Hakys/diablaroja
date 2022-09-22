<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Controlpanel extends Model
{
    use HasFactory;

    public function __invoke(){
        $operaciones = Operacion::all();
        $tipos = Tipo::all();
        $estados = Estado::all();
        $conceptos = Concepto::all();
        $mensajerias = Mensajeria::all();
        $metodospagos = Pago::all();
        $contactos = Contacto::all();
        $direcciones = Direccion::all();
        $facturas = Factura::all();
        $envios = DB::table('factura_mensajeria')->get();
        $pagos = DB::table('factura_pago')->get();
        $productos = Producto::all();
        return view('controlpanel.show',compact(
            'operaciones','tipos','estados',
            'conceptos','mensajerias','metodospagos',
            'contactos','direcciones','facturas',
            'envios', 'pagos', 'productos'
        ));
    }
}
