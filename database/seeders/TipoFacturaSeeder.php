<?php

namespace Database\Seeders;

use App\Models\Operacion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\TipoFactura;

class TipoFacturaSeeder extends Seeder
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
        $compraventa = Operacion::where('name','COMPRA-VENTA')->first();

        $tipofacturas = [
            [
                "name" => "PROV",
                "descripcion" => "Compra a Proveedor",
                "slug" => Str::slug("Compra a Proveedor"),
                "icon" => "<i class='fas fa-money-bill-alt'></i>",
                "color" => '-orange-600',
                "operacion_id" => $compra->id,
            ],[
                "name" => "DL",
                "descripcion" => "Compra a DreamLove",
                "slug" => Str::slug("Compra a DreamLove"),
                "icon" => "<i class='fas fa-money-bill-alt'></i>",
                "color" => '-orange-600',
                "operacion_id" => $compra->id,
            ],[
                "name" => "LC",
                "descripcion" => "Compra a LoveCherry",
                "slug" => Str::slug("Compra a LoveCherry"),
                "icon" => "<i class='fas fa-money-bill-alt'></i>",
                "color" => '-orange-600',
                "operacion_id" => $compra->id,
            ],[
                "name" => "GRU",
                "descripcion" => "Compra a Grutinet",
                "slug" => Str::slug("Compra a Grutinet"),
                "icon" => "<i class='fas fa-money-bill-alt'></i>",
                "color" => '-orange-600',
                "operacion_id" => $compra->id,
            ],[
                "name" => "GAS",
                "descripcion" => "Gastos Varios",
                "slug" => Str::slug("Gastos Varios"),
                "icon" => "<i class='fas fa-money-bill-alt'></i>",
                "color" => '-orange-600',
                "operacion_id" => $gasto->id,
            ],[
                "name" => "N/D",
                "descripcion" => "Gastos No Desgrabable",
                "slug" => Str::slug("Gastos No Desgrabable"),
                "icon" => "<i class='fas fa-money-bill-alt'></i>",
                "color" => '-orange-600',
                "operacion_id" => $gasto->id,
            ],[
                "name" => "DRO",
                "descripcion" => "Venta Dropshipping",
                "slug" => Str::slug("Venta Dropshipping"),
                "icon" => "<i class='fas fa-money-bill-alt'></i>",
                "color" => '-orange-600',
                "operacion_id" => $venta->id,
            ],[
                "name" => "TPS",
                "descripcion" => "Venta Tuppersex",
                "slug" => Str::slug("Venta Tuppersex"),
                "icon" => "<i class='fas fa-money-bill-alt'></i>",
                "color" => '-orange-600',
                "operacion_id" => $venta->id,
            ],[
                "name" => "WEB",
                "descripcion" => "Venta Web",
                "slug" => Str::slug("Venta Web"),
                "icon" => "<i class='fas fa-money-bill-alt'></i>",
                "color" => '-orange-600',
                "operacion_id" => $venta->id,
            ],[
                "name" => "C/V",
                "descripcion" => "Compra-Venta",
                "slug" => Str::slug("Compra-Venta"),
                "icon" => "<i class='fas fa-money-bill-alt'></i>",
                "color" => '-orange-600',
                "operacion_id" => $compraventa->id,
            ],[
                "name" => "DR",
                "descripcion" => "Diabla Roja - Almacén",
                "slug" => Str::slug("Diabla Roja - Almacén"),
                "icon" => "<i class='fas fa-money-bill-alt'></i>",
                "color" => '-orange-600',
                "operacion_id" => $compra->id,
            ]
        ];

        foreach($tipofacturas as $tipofactura){
            TipoFactura::Create($tipofactura);
        }
    }
}
