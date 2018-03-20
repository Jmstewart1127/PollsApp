<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemographicData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demographic_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('race');
            $table->string('sex');
            $table->integer('age');
            $table->integer('latitude');
            $table->integer('longitude');
            $table->string('city');
            $table->string('state');
            $table->timestamps();
        });
    }

    /**
     *
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
