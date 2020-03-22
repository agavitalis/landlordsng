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
          "type_name"=>"Housing",


      ],
      [
            "type_name"=>"Cars",

        ],
      [
        'type_name'=>"Land"
      ]
   ]);

}
