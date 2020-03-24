<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "name" => "LandlordsNG", "email" => "hello@landlordsng.com", "password" => Hash::make('landlords101'), "agency_id" => 1,
            ],

        ]);
    }
}
