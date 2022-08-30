<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number1')->default('0000000000')->nullable();
            $table->string('phone_number2')->default('0000000000')->nullable();
            $table->string('email1')->default('example.com')->nullable();
            $table->string('email2')->default('example.com')->nullable();
            $table->string('sliders')->nullable();
            $table->string('video')->nullable();
            $table->string('photo')->nullable();
            $table->string('facebook')->default('facebook.com')->nullable();
            $table->string('twitter')->default('twitter.com')->nullable();
            $table->string('linkedin')->default('linkedin.com')->nullable();
            $table->string('instagram')->default('instagram.com')->nullable();
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
        Schema::dropIfExists('information');
    }
};