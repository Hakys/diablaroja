<?php

namespace Database\Factories;

use App\Models\Facturante;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Operacion;
use App\Models\TipoFactura;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class FacturanteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Facturante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $telefono = $this->faker->phoneNumber();
        // SOLO CREA CLIENTES PARA VENTAS
        $tipo_factura = TipoFactura::whereHas("operacion",function(Builder $query){
            $query->whereIn('name',['VENTA']);
        })->inRandomOrder()->first();
        return [
            "alias" => $this->faker->name()." ".$this->faker->city." ".$this->faker->state,
            "telefono" => $telefono,
            "slug" => Str::slug($telefono),
            "tipo_factura_id" => $tipo_factura->id,
        ];
    }
}
