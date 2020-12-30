<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
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
            $table->string('product_name', 50);
            $table->longText('description');
            $table->string('stock', 30)->nullable();
            $table->string('view', 30)->nullable();
            $table->string('priceEach', 30);
            $table->string('slug', 50)->nullable();
            $table->string('size', 30)->nullable();
            $table->longText('image1')->nullable();;
            $table->longText('image2')->nullable();;
            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
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
