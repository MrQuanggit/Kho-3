<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name', 30);
            $table->string('password', 255);
            $table->string('user_email', 30)->nullable();
            $table->longText('user_image')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('name')->nullable();
            $table->integer('status')->default(1);
            $table->unsignedInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('parts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
