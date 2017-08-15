<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername');
            $table->string('marital_status');
            $table->string('disability_status');
            $table->text('owner_picture');
            $table->text('id_picture');
            $table->text('id_type');
            $table->text('id_no')->unique()->index();
            $table->string('phone');
            $table->string('phone_network');
            $table->string('email')->unique();
            $table->string('nearest_landmark');
            $table->string('lang_written');
            $table->string('lang_spoken');
            $table->string('ethnicity');
            $table->date('dob');
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
        Schema::dropIfExists('owner');
    }
}
