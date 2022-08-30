<?php

namespace Database\Seeders;

use App\Models\Factura;
use App\Models\Mensajeria;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

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
            for($i=0; $i < random_int(1,2); $i++){
                $mensajeria = Mensajeria::all()->random();
                if($mensajeria->id == 1) $seguimiento = "";
                else $seguimiento = Str::upper(Str::random(12));
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
