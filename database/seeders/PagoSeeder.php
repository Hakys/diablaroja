<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Pago;

class PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipopagos=[
            [
                "name" => "Efectivo/Contrarrembolso",
                "slug" => Str::slug("Efectivo/Contrarrembolso"),
                "icon" => "<i class='fas fa-hand-holding-usd'></i>",
            ],[
                "name" => "Tarjeta Débito/Crédito",
                "slug" => Str::slug("Tarjeta Débito/Crédito"),
                "icon" => "<i class='far fa-credit-card'></i>",
            ],[
                "name" => "Ingreso Banco/CC",
                "slug" => Str::slug("Ingreso Banco/CC"),
                "icon" => "<i class='fas fa-university'></i>",
            ],[
                "name" => "Bizum",
                "slug" => Str::slug("Bizum"),
                "icon" => "<i class='fas fa-money-check-alt'></i>",
            ],
        ];

        foreach ($tipopagos as $tipopago){
            Pago::Create($tipopago);
        }
    }
}
