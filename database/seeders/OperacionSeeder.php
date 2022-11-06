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
                "icon" => "<i class='fa-fw fas fa-shopping-cart'></i>",
                "slug" => Str::slug("COMPRA"),
                "color" => 'yellow-600',
            ],[
                "name" => "GASTO",
                "icon" => "<i class='fa-fw far fa-angry'></i>",
                "slug" => Str::slug("GASTO"),
                "color" => 'red-600',
            ],[
                "name" => "VENTA",
                "icon" => "<i class='fa-fw fas fa-cash-register'></i>",
                "slug" => Str::slug("VENTA"),
                "color" => 'green-600',
            ],[
                "name" => "COMPRAVENTA",
                "icon" => "<i class='fa-fw fas fa-cash-register'></i>",
                "slug" => Str::slug("COMPRAVENTA"),
                "color" => 'blue-600',
            ]
        ];

        foreach($operaciones as $operacion){
            Operacion::Create($operacion);
        }
    }
}
