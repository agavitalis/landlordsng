<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("users")->insert([

        [
              "name"=>"Awam Victor",
              "email"=>"Aeinsteinvikta@gmail.com",
              "password"=>"123yyyaaty21"              
          ]
       ]);
    }
}
