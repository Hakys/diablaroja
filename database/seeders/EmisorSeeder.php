<?php

namespace Database\Seeders;

use App\Models\Direccion;
use App\Models\Facturante;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;

class EmisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //COMPRA y GASTO
        $facturantes = Facturante::whereHas('tipo_factura', function(Builder $query){
            $query->whereHas('operacion', function(Builder $query){
                $query->whereIn('name',['COMPRA','GASTO']);
            });
        })->get();

        foreach($facturantes as $facturante){
            $direccion = Direccion::factory()->create();
            $facturante->direccions_emisores()->attach([
                $direccion->id => [
                    'created_at' => today(),
                    'updated_at' => today(),
                ],
            ]);
        }
    }
}
