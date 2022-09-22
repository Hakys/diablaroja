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
      $this->call(TipoSeeder::class);
      $this->call(ContactoSeeder::class);
      $this->call(EstadoSeeder::class);
      $this->call(MensajeriaSeeder::class);
      $this->call(PagoSeeder::class);
      $this->call(ConceptoSeeder::class);
      $this->call(FacturaSeeder::class);
      $this->call(FacturaMensajeriaSeeder::class);
      $this->call(FacturaPagoSeeder::class);
    }
}
