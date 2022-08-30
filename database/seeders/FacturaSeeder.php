<?php

namespace Database\Seeders;

use App\Models\Concepto;
use App\Models\Emisor;
use App\Models\Factura;
use App\Models\Facturante;
use Illuminate\Database\Seeder;
use App\Models\TipoFactura;
use App\Models\Operacion;
use App\Models\Receptor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //COMPRA-VENTA-RECEPTOR
        $compraventas = Receptor::whereHas('facturante', function(Builder $query){
            $query->whereHas('tipo_factura', function(Builder $query){
                $query->whereHas('operacion', function(Builder $query){
                    $query->where('name','COMPRA-VENTA');
                });
            });
        })->get();

        //COMPRA
        $operacion = Operacion::where('name','COMPRA')->first();
        $conceptos = Concepto::where('operacion_id', $operacion->id)->get();
        $emisores = Emisor::whereHas('facturante', function(Builder $query){
            $query->whereHas('tipo_factura', function(Builder $query){
                $query->whereHas('operacion', function(Builder $query){
                    $query->where('name','COMPRA');
                });
            });
        })->get();
        $receptores = $compraventas;
        foreach($emisores as $emisor){
            Factura::factory()->create([
                'concepto_id' => $conceptos->random(1)->first()->id,
                'tipo_factura_id' => $emisor->facturante->tipo_factura_id,
                'emisor_id' => $emisor->id,
                'receptor_id' => $receptores->random(1)->first()->id,
            ]);
        }

        //GASTO
        $operacion = Operacion::where('name','GASTO')->first();
        $conceptos = Concepto::where('operacion_id', $operacion->id)->get();
        $emisores = Emisor::whereHas('facturante', function(Builder $query){
            $query->whereHas('tipo_factura', function(Builder $query){
                $query->whereHas('operacion', function(Builder $query){
                    $query->where('name','GASTO');
                });
            });
        })->get();
        $receptores = $compraventas;
        foreach($emisores as $emisor){
            Factura::factory()->create([
                'concepto_id' => $conceptos->random(1)->first()->id,
                'tipo_factura_id' => $emisor->facturante->tipo_factura_id,
                'emisor_id' => $emisor->id,
                'receptor_id' => $receptores->random(1)->first()->id,
            ]);
        }

        //COMPRA-VENTA-EMISOR
        $compraventas = Emisor::whereHas('facturante', function(Builder $query){
            $query->whereHas('tipo_factura', function(Builder $query){
                $query->whereHas('operacion', function(Builder $query){
                    $query->where('name','COMPRA-VENTA');
                });
            });
        })->get();

        //VENTA
        $operacion = Operacion::where('name','VENTA')->first();
        $conceptos = Concepto::where('operacion_id', $operacion->id)->get();
        $emisor = $compraventas;
        $receptores = Receptor::whereHas('facturante', function(Builder $query){
            $query->whereHas('tipo_factura', function(Builder $query){
                $query->whereHas('operacion', function(Builder $query){
                    $query->where('name','VENTA');
                });
            });
        })->get();
        foreach($receptores as $receptor){
            Factura::factory()->create([
                'concepto_id' => $conceptos->random(1)->first()->id,
                'tipo_factura_id' => $receptor->facturante->tipo_factura_id,
                'emisor_id' => $emisor->random(1)->first()->id,
                'receptor_id' => $receptor->id,
            ]);
        }

        foreach(Factura::all() as $factura){
            //$tipo_factura = $factura->tipo_factura()->first();
            //$operacion = Operacion::where('id',$tipo_factura->operacion_id)->first();
            $operacion = $factura->tipo_factura->operacion;
            if($operacion->name == "VENTA"){
                $tipofactura_c = TipoFactura::whereHas("operacion",function(Builder $query){
                    $query->whereIn('name',['COMPRA']);
                })->get("id");
                $f_asociada = Factura::whereIn('tipo_factura_id',$tipofactura_c)->inRandomOrder()->first();
                $factura->asociada = ($f_asociada ? $f_asociada->id : null);
                $factura->save();
            }
            if(($operacion->name == "COMPRA")||($operacion->name == "GASTO")){
                $factura->total = $factura->total * -1;
                $factura->save();
            }
        }
    }
}
