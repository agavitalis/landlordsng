<?php

use Illuminate\Database\Seeder;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    }
}
{
    //create the seed for the users table
    DB::table("property_types")->insert([

        [
            "property_type_name" => "Housing",

        ],
        [
            "property_type_name" => "Cars",

        ],
        [
            'property_type_name' => "Land",
        ],
    ]);

}
