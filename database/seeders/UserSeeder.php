<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Team;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::Create([
            "user_id" => 1,
            "name" => "The Admins",
            "personal_team" => 0,
        ]);

        User::Create([
			"name" => "antonio",
			"email" => "hakyss@hotmail.com",
			"password" => bcrypt("password"),
			"current_team_id" => 1,
		]);
    }
}
