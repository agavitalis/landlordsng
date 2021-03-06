<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();                  
            $table->string('title');
            $table->string('location');
            $table->string('state');
            $table->string('country');
            $table->string('property_status_id');
            $table->string('property_type_id');
            $table->string('price');
            $table->string('old_price')->nullable();
            $table->string('cover_picture_name')->nullable();
            $table->longText('property_description');
            $table->string('property_video')->nullable();
            $table->string('agent_id');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.                                  
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
                                                                                                                                                                                                                                                                                            