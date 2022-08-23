<?php

namespace Database\Seeders;

use App\Models\Direccion;
use App\Models\Facturante;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ReceptorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //VENTA
        $facturantes = Facturante::whereHas('tipo_factura', function(Builder $query){
            $query->whereHas('operacion', function(Builder $query){
                $query->where('name','VENTA');
            });
        })->get();

        foreach($facturantes as $facturante){
            if(random_int(0,2)){
                $direccion = Direccion::factory()->sindatos()->create([
                    'telefono' => $facturante->telefono,
                ]);
                for($i=0; $i < random_int(0,2); $i++){
                    $direccion = Direccion::factory()->create([
                        'full_name' => Str::upper($facturante->alias),
                        'telefono' => $facturante->telefono,
                    ]);
                }
                $facturante->direccions_receptores()->attach([
                    $direccion->id => [
                        'created_at' => today(),
                        'updated_at' => today(),
                    ],
                ]);
            }
        }
    }
}
