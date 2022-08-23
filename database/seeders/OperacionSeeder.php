<?php

namespace Database\Seeders;

use App\Models\Operacion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OperacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operaciones = [
            [
                "name" => "COMPRA",
                "icon" => "<i class='fas fa-shopping-cart'></i>",
                "slug" => Str::slug("COMPRA"),
            ],[
                "name" => "GASTO",
                "icon" => "<i class='far fa-angry'></i>",
                "slug" => Str::slug("GASTO"),
            ],[
                "name" => "VENTA",
                "icon" => "<i class='fas fa-cash-register'></i>",
                "slug" => Str::slug("VENTA"),
            ],[
                "name" => "COMPRA-VENTA",
                "icon" => "<i class='fas fa-diagnoses'></i>",
                "slug" => Str::slug("COMPRA-VENTA"),
            ],
        ];

        foreach($operaciones as $operacion){
            Operacion::Create($operacion);
        }
    }
}
