<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Concepto;
use Illuminate\Support\Str;
use App\Models\Operacion;

class ConceptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compra = Operacion::where('name','COMPRA')->first();
        $gasto = Operacion::where('name','GASTO')->first();
        $venta = Operacion::where('name','VENTA')->first();
        $compraventa = Operacion::where('name',"COMPRA-VENTA")->first();

        $conceptos = [
           [
                "name" => "Alojamiento Web y Dominios",
                "slug" => Str::slug("Alojamiento Web y Dominios"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Artículos Eróticos",
                "slug" => Str::slug("Artículos Eróticos"),
                "operacion_id" => $compra->id,
            ],[
                "name" => "Artículos Eróticos",
                "slug" => Str::slug("Artículos Eróticos"),
                "operacion_id" => $venta->id,
            ],[
                "name" => "Artículos Eróticos",
                "slug" => Str::slug("Artículos Eróticos"),
                "operacion_id" => $compraventa->id,
            ],[
                "name" => "Artículos Informática",
                "slug" => Str::slug("Artículos Informática"),
                "operacion_id" => $compra->id,
            ],[
                "name" => "Asistencia Reunión Tuppersex",
                "slug" => Str::slug("Asistencia Reunión Tuppersex"),
                "operacion_id" => $venta->id,
            ],[
                "name" => "Comisión Apertura Descubierto",
                "slug" => Str::slug("Comisión Apertura Descubierto"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Comisión por Rembolso",
                "slug" => Str::slug("Comisión por Rembolso"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Cuota Seguridad Social T.A.",
                "slug" => Str::slug("Cuota Seguridad Social T.A."),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Cuota Tarjeta Visa",
                "slug" => Str::slug("Cuota Tarjeta Visa"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Gastos de Dropshipping",
                "slug" => Str::slug("Gastos de Dropshipping"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Gastos de Envío",
                "slug" => Str::slug("Gastos de Envío"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Gestión Fiscal Trimestral",
                "slug" => Str::slug("Gestión Fiscal Trimestral"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Interes Tarjeta Credito/Debito",
                "slug" => Str::slug("Interes Tarjeta Credito/Debito"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Intereses por Descubierto",
                "slug" => Str::slug("Intereses por Descubierto"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Material Oficinal y Consumibles",
                "slug" => Str::slug("Material Oficinal y Consumibles"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Prestación de Servicios Varios",
                "slug" => Str::slug("Prestación de Servicios Varios"),
                "operacion_id" => $venta->id,
            ],[
                "name" => "Publicidad",
                "slug" => Str::slug("Publicidad"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Seguro de Responsabilidad",
                "slug" => Str::slug("Seguro de Responsabilidad"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Servicio Apertura de Descubierto",
                "slug" => Str::slug("Servicio Apertura de Descubierto"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "Servicio de Mensajería",
                "slug" => Str::slug("Servicio de Mensajería"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "TPV GPRS/IN Tarifa Plana",
                "slug" => Str::slug("TPV GPRS/IN Tarifa Plana"),
                "operacion_id" => $gasto->id,
            ],[
                "name" => "VISA Negocios Credito",
                "slug" => Str::slug("VISA Negocios Credito"),
                "operacion_id" => $gasto->id,
            ],
        ];

        foreach($conceptos as $concepto){
            Concepto::Create($concepto);
        }
    }
}
