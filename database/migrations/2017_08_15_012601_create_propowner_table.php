<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropownerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propowner', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->integer('owner_id')->unsigned();
            $table->timestamps();
            //set foreign key to reference id on property table to reference property_id on bridge table
            $table->foreign('property_id')->references('id')->on('property')->onUpdate('cascade');
            //set foreign key to reference id on owner table to reference owner_id on bridge table
            $table->foreign('owner_id')->references('id')->on('owner')->onUpdate('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propowner');
    }
}
