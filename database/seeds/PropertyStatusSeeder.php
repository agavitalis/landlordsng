<?php

use Illuminate\Database\Seeder;

class PropertyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("property_statuses")->insert([

        [
              "property_status_name"=>"Sample Status One",


          ],
          [
                "property_status_name"=>"Sample Status Two",

            ],
          [
            'property_status_name'=>"Sample Status Three"
          ]
       ]);
    }
}
