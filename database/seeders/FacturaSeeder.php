<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use App\Models\Operacion;
use App\Models\Direccion;
use App\Models\Concepto;
use App\Models\Factura;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        //COMPRA-VENTA-RECEPTOR
        $compraventas = Receptor::whereHas('facturante', function(Builder $query){
            $query->whereHas('tipo_factura', function(Builder $query){
                $query->whereHas('operacion', function(Builder $query){
                    $query->where('name','COMPRA-VENTA');
                });
            });
        })->get();
        */
        
        //COMPRA
        $operacion = Operacion::where('name','COMPRA')->first();
        $dir_emisores = Direccion::whereHas('tipo', function(Builder $query){
            $query->whereHas('operacion', function(Builder $query){
                $query->whereIn('name',['COMPRA']);
            })->whereNot('name','Comprador');
        })->get(); 
        $dir_receptores = Direccion::whereHas('tipo', function(Builder $query){
            $query->where('name','Comprador'); 
        });
        $conceptos = Concepto::whereHas('operacion', function(Builder $query){
            $query->where('name','COMPRA');
        });
        foreach($dir_emisores as $dir_emisor){
            $f[] = Factura::factory()->create([
                'operacion_id' => $operacion->id,
                'emisor_id' => $dir_emisor->id,
                'receptor_id' => $dir_receptores->inRandomOrder()->first()->id,
                'concepto_id' => $conceptos->inRandomOrder()->first()->id,
            ]);
        }     

        //GASTO
        $operacion = Operacion::where('name','GASTO')->first();
        $dir_emisores = Direccion::whereHas('tipo', function(Builder $query){
            $query->whereHas('operacion', function(Builder $query){
                $query->whereIn('name',['GASTO']);
            })->whereNot('name','Consumidor');
        })->get(); 
        $dir_receptores = Direccion::whereHas('tipo', function(Builder $query){
            $query->where('name','Consumidor'); 
        });
        $conceptos = Concepto::whereHas('operacion', function(Builder $query){
            $query->where('name','GASTO');
        });
        foreach($dir_emisores as $dir_emisor){
            $f[] = Factura::factory()->create([
                'operacion_id' => $operacion->id,
                'emisor_id' => $dir_emisor->id,
                'receptor_id' => $dir_receptores->inRandomOrder()->first()->id,
                'concepto_id' => $conceptos->inRandomOrder()->first()->id,
            ]);
        }     

        //VENTA
        $operacion = Operacion::where('name','VENTA')->first();
        $dir_emisores = Direccion::whereHas('tipo', function(Builder $query){
            $query->where('name','Vendedor'); 
        });
        $dir_receptores = Direccion::whereHas('tipo', function(Builder $query){
            $query->whereHas('operacion', function(Builder $query){
                $query->whereIn('name',['VENTA']);
            })->whereNot('name','Vendedor');
        })->get(); 
        $conceptos = Concepto::whereHas('operacion', function(Builder $query){
            $query->where('name','VENTA');
        });
        foreach($dir_receptores as $dir_receptor){
            $f[] = Factura::factory()->create([
                'operacion_id' => $operacion->id,
                'emisor_id' => $dir_emisores->inRandomOrder()->first()->id,
                'receptor_id' => $dir_receptor->id,
                'concepto_id' => $conceptos->inRandomOrder()->first()->id,
            ]);
        }   
/*
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
        */
    }
}
