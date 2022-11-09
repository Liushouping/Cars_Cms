<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->index();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('model')->nullable();
            $table->string('engine')->nullable();
            $table->string('​exhaust')->nullable();
            $table->string('max_horsepower')->nullable();
            $table->string('​max_torque')->nullable();
            $table->string('price')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('on_sale')->default(true);
            $table->string('phone')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
