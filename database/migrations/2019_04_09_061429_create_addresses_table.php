<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('regencies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('province_id')->unsigned();
            $table->string('name');

            $table->foreign('province_id')->references('id')->on('provinces');
            $table->timestamps();
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('regency_id')->unsigned();
            $table->string('name');
            $table->string('detail');
            $table->string('postcode');

            $table->foreign('regency_id')->references('id')->on('regencies');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('addresses');
    }
}
