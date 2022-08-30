<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            [
                "name" => "Pedido",
                "slug" => Str::slug("Pedido"),
                "icon" => "<i class='fa-fw far fa-smile-beam'></i>",
                "color" => 'text-amber-600',
            ],[
                "name" => "Datos Incompletos",
                "slug" => Str::slug("Datos Incompletos"),
                "icon" => "<i class='fa-fw far fa-angry'></i>",
                "color" => 'text-orange-600',
            ],[
                "name" => "En Espera de Pago",
                "slug" => Str::slug("En Espera de Pago"),
                "icon" => "<i class='fa-fw far fa-angry'></i>",
                "color" => 'text-amber-600',
            ],[
                "name" => "Pago Erróneo",
                "slug" => Str::slug("Pago Erróneo"),
                "icon" => "<i class='fa-fw far fa-angry'></i>",
                "color" => 'text-orange-600',
            ],[
                "name" => "Pago Aceptado",
                "slug" => Str::slug("Pago Aceptado"),
                "icon" => "<i class='fa-fw far fa-smile-beam'></i>",
                "color" => 'text-indigo-600',
            ],[
                "name" => "Enviado",
                "slug" => Str::slug("Enviado"),
                "icon" => "<i class='fa-fw far fa-smile-beam'></i>",
                "color" => 'text-emerald-600',
            ],[
                "name" => "Cancelado",
                "slug" => Str::slug("Cancelado"),
                "icon" => "<i class='fa-fw far fa-angry'></i>",
                "color" => 'text-gray-600',
            ],[
                "name" => "Rembolsado",
                "slug" => Str::slug("Rembolsado"),
                "icon" => "<i class='fa-fw far fa-angry'></i>",
                "color" => 'text-gray-600',
            ],[
                "name" => "Entregado",
                "slug" => Str::slug("Entregado"),
                "icon" => "<i class='fa-fw far fa-smile-beam'></i>",
                "color" => 'text-emerald-600',
            ],
        ];

        foreach($estados as $estado){
            Estado::Create($estado);
        }
    }
}