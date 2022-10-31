<?php

namespace Database\Factories;

use App\Models\Direccion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DireccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Direccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "telefono" => $this->faker->phoneNumber(),
            "full_name" => $this->faker->name()." ".$this->faker->lastName()." ".$this->faker->lastName(),
            "direccion" => $this->faker->streetAddress,
            "cp" => $this->faker->postcode,
            "poblacion" => $this->faker->city,
            "provincia" => $this->faker->state,
            "nif" => $this->faker->ean8.Str::upper($this->faker->randomLetter),
            "email" => $this->faker->email,
        ];
    }

    public function sindatos()
    {
        return $this->state(function (array $attributes) {
            return [
                "full_name" => "Recoge",
                "direccion" => "F. Simplificada, Sin Datos",
                "cp" => "",
                "poblacion" => "Huelva",
                "provincia" => "",
                "nif" => "",
                "email" => ""
            ];
        });
    }
}
