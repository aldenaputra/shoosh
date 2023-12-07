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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shoes_id');
            $table->string('nickname');
            $table->string('title');
            $table->longText('description');
            $table->integer('quality');
            $table->integer('value');
            $table->integer('price');
            $table->timestamps();

            $table->foreign('shoes_id')->references('id')->on('shoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review');
    }
};
