<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Operacion;
use App\Models\Tipo;
use App\Models\Estado;
use App\Models\Concepto;
use App\Models\Mensajeria;
use App\Models\Pago;
use App\Models\Contacto;
use App\Models\Direccion;
use App\Models\Factura;
use App\Models\Producto;

class ControlpanelController extends Controller
{
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
