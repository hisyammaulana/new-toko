<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('sub_category_id')->unsigned();
            $table->string('name');
            $table->integer('satuan');
            $table->string('image');
            $table->integer('set_lusin');
            $table->integer('lusin');
            $table->integer('set_grosir');
            $table->integer('grosir');
            $table->integer('trim');
            $table->integer('stok');
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('CASCADE');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
