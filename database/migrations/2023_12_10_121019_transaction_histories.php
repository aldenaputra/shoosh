<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaction_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('shoeid');
            $table->timestamps();
            $table->integer('quantity');
            $table->string('payment_method');
            $table->string('image');
            $table->bigInteger('total');

            $table->foreign('userid')->references('id')->on('users');
            $table->foreign('shoeid')->references('id')->on('shoes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_history');
    }
};
