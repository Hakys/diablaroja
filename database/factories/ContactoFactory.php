<?php

namespace Database\Factories;

use App\Models\Operacion;
use App\Models\Tipo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacto>
 */
class ContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $telefono = $this->faker->phoneNumber();
        return [
            "alias" => $this->faker->name()." ".$this->faker->city." ".$this->faker->state,
            "telefono" => $telefono,
            "slug" => Str::slug($telefono),
        ];
    }

    public function cliente()
    {
        // SOLO CREA CLIENTES PARA VENTAS
        return $this->state(function (array $attributes) {
            $telefono = $this->faker->phoneNumber();
            return [
                "alias" => $this->faker->name()." ".$this->faker->city." ".$this->faker->state,
                "telefono" => $telefono,
                "slug" => Str::slug($telefono),
                'operacion_id' => Operacion::where('name','VENTA')->first()->id,
            ];
        });
    }
}
