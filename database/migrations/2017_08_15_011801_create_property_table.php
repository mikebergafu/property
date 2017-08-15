<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('ownership_status');
            $table->string('registration_status');
            $table->string('electricity_source');
            $table->string('unit_in_building');
            $table->string('nearest_landmark');
            $table->string('geo_lat');
            $table->string('geo_lng');
            $table->string('geo_accuracy');
            $table->string('property_id_no');
            $table->string('identure_no');
            $table->string('residential_class');
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
        Schema::dropIfExists('property');
    }
}
