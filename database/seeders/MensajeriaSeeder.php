<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Mensajeria;

class MensajeriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mensajerias = [
            [
                "name" => "Recoge Huelva",
                "slug" => Str::slug("Recoge Huelva"),
                "icon" => "<i class='fa-fw fas fa-shipping-fast'></i>",
                "total" => 0.00,
            ],[
                "name" => "MRW",
                "slug" => Str::slug("MRW"),
                "icon" => "<i class='fa-fw fas fa-shipping-fast'></i>",
                "url" => "https://mrw.es/seguimiento_envios/MRW_resultados_consultas.asp?modo=nacional&envio=",
                "total" => 5.50,
            ],[
                "name" => "Nacex",
                "slug" => Str::slug("Nacex"),
                "icon" => "<i class='fa-fw fas fa-shipping-fast'></i>",
                "url" => "http://www.nacex.es/irSeguimiento.do",
                "total" => 5.50,
            ],[
                "name" => "Correos",
                "slug" => Str::slug("Correos"),
                "icon" => "<i class='fa-fw fas fa-shipping-fast'></i>",
                "url" => "https://www.correos.es/es/es/herramientas/localizador/envios",
                "total" => 6.00,
            ],
        ];

        foreach($mensajerias as $mensajeria){
            Mensajeria::Create($mensajeria);
        }
    }
}
