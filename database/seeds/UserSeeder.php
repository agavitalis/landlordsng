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
                "name" => "LandlordsNG Admin", "email" => "admin@landlordsng.com", "password" => Hash::make('admin101'),"agency_id" => 1,
            ],
            [
                "name"=>"LandlordsNG User","email"=>"user@landlordsng.com","password"=>Hash::make('user101'),"agency_id" => 1,                              
            ]

        ]);
       
    }
}
