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
                "icon" => '-smile-beam',
                "color" => '-yellow-300',
            ],[
                "name" => "Datos Incompletos",
                "slug" => Str::slug("Datos Incompletos"),
                "icon" => '-angry',
                "color" => '-orange-600',
            ],[
                "name" => "En Espera de Pago",
                "slug" => Str::slug("En Espera de Pago"),
                "icon" => '-angry',
                "color" => '-yellow-300',
            ],[
                "name" => "Pago Erróneo",
                "slug" => Str::slug("Pago Erróneo"),
                "icon" => '-angry',
                "color" => '-orange-600',
            ],[
                "name" => "Pago Aceptado",
                "slug" => Str::slug("Pago Aceptado"),
                "icon" => '-smile-beam',
                "color" => '-indigo-600',
            ],[
                "name" => "Enviado",
                "slug" => Str::slug("Enviado"),
                "icon" => '-smile-beam',
                "color" => '-green-600',
            ],[
                "name" => "Cancelado",
                "slug" => Str::slug("Cancelado"),
                "icon" => '-angry',
                "color" => '-gray-300',
            ],[
                "name" => "Rembolsado",
                "slug" => Str::slug("Rembolsado"),
                "icon" => '-angry',
                "color" => '-gray-300',
            ],[
                "name" => "Entregado",
                "slug" => Str::slug("Entregado"),
                "icon" => '-smile-beam',
                "color" => '-indigo-600',
            ],
        ];

        foreach($estados as $estado){
            Estado::Create($estado);
        }
    }
}
