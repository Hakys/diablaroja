<?php

namespace Database\Seeders;

use App\Models\Factura;
use App\Models\TipoPago;
use Illuminate\Database\Seeder;

class FacturaTipoPagoSeeder extends Seeder
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
                $tipopago = TipoPago::all()->random();
                $factura->tipo_pagos()->attach([
                    $tipopago->id => [
                        'total' => mt_rand(1000,29999)/100,
                        'created_at' => today(),
                        'updated_at' => today(),
                    ],
                ]);
            }
        }
    }
}
