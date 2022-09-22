<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Factura;
use App\Models\Mensajeria;

class FacturaMensajeriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facturas = Factura::all();
        foreach($facturas as $factura){
            for($i=0; $i < random_int(1,3); $i++){
                $mensajeria = Mensajeria::all()->random();
                if($mensajeria->id != 1) $seguimiento = Str::upper(Str::random(12));
                else $seguimiento = "";
                $factura->envios()->attach([
                    $mensajeria->id => [
                        'seguimiento' => $seguimiento,
                        'total' => $mensajeria->total,
                        'created_at' => today(),
                        'updated_at' => today(),
                    ]
                ]);
            }
        }
    }
}
