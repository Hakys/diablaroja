<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Team;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        if(!Team::find(1))
		Team::Create([
			"user_id" => 1,
			"name" => "The Admins",
			"personal_team" => 0,
		]);

	if(!User::find(1)){
		User::Create([
			"name" => "Hakys",
			"email" => "hakyss@hotmail.com",
			"password" => bcrypt("password"),
			"current_team_id" => 1,
		]);

		User::Create([
			"name" => "julia",
			"email" => "julia_ch_r@hotmail.com",
			"password" => bcrypt("password"),
			"current_team_id" => 1,
		]);
	}
    }
}
