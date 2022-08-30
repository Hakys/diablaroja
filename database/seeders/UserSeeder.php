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
        /*
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
*/


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
