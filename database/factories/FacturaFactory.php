<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Estado;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factura>
 */
class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $estado = Estado::all()->random(1)->first();
        return [
            "fecha" => today()->addDay(random_int(-720,0)),
            'num_pedido' => $this->faker->numerify("######"),
            'num_factura' => $this->faker->numerify("######"),
            'estado_id' => $estado->id,
            'total' => $this->faker->randomFloat(2,10,300),
        ];
    }
}
