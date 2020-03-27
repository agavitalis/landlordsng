<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_requests', function (Blueprint $table) {
            $table->id();
            $table->string('agency_name');
            $table->string('founder');
            $table->string('email');
            $table->string('phone');
            $table->string('biography'); 
            $table->string('address'); 
            $table->string('profile_picture'); 
            $table->string('status')->default(0);
            $table->string('user_id');
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
        Schema::dropIfExists('agency_requests');
    }
}
