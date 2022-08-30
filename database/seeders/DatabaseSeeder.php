<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call(UserSeeder::class);
		$this->call(OperacionSeeder::class);
		$this->call(TipoFacturaSeeder::class);
		$this->call(EstadoSeeder::class);
		$this->call(ConceptoSeeder::class);
		$this->call(FacturanteSeeder::class);
		$this->call(DireccionFacturanteSeeder::class);
        $this->call(MensajeriaSeeder::class);
        $this->call(TipoPagoSeeder::class);
    }
}
