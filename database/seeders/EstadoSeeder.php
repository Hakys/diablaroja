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
                "de" => 'FAC',
            ],[
                "name" => "Datos Incompletos",
                "slug" => Str::slug("Datos Incompletos"),
                "icon" => "<i class='fa-fw far fa-angry'></i>",
                "color" => 'text-orange-600',
                "de" => 'FAC',
            ],[
                "name" => "En Espera de Pago",
                "slug" => Str::slug("En Espera de Pago"),
                "icon" => "<i class='fa-fw far fa-angry'></i>",
                "color" => 'text-amber-600',
                "de" => 'FAC',
            ],[
                "name" => "Pago Erróneo",
                "slug" => Str::slug("Pago Erróneo"),
                "icon" => "<i class='fa-fw far fa-angry'></i>",
                "color" => 'text-orange-600',
                "de" => 'FAC',
            ],[
                "name" => "Pago Aceptado",
                "slug" => Str::slug("Pago Aceptado"),
                "icon" => "<i class='fa-fw far fa-smile-beam'></i>",
                "color" => 'text-indigo-600',
                "de" => 'FAC',
            ],[
                "name" => "Enviado",
                "slug" => Str::slug("Enviado"),
                "icon" => "<i class='fa-fw far fa-smile-beam'></i>",
                "color" => 'text-emerald-600',
                "de" => 'FAC',
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
                "de" => 'FAC',
            ],[
                "name" => "Entregado",
                "slug" => Str::slug("Entregado"),
                "icon" => "<i class='fa-fw far fa-smile-beam'></i>",
                "color" => 'text-emerald-600',
                "de" => 'FAC',
            ],[
                "name" => "Realizada",
                "slug" => Str::slug("Realiazada"),
                "icon" => "<i class='fa-fw far fa-smile-beam'></i>",
                "color" => 'text-emerald-600',
                "de" => 'TPS',
            ],[
                "name" => "Sin Confirmar",
                "slug" => Str::slug("Sin Confirmar"),
                "icon" => "<i class='fa-fw far fa-smile-beam'></i>",
                "color" => 'text-emerald-600',
                "de" => 'TPS',
            ],
        ];

        foreach($estados as $estado){
            Estado::Create($estado);
        }
    }
}