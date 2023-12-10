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
        Schema::create('products_in_carts', function (Blueprint $table) {
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('dummy_users');
            $table->id();
            $table->string('nama_barang');
            $table->integer('stock');
            $table->bigInteger('harga_barang');
            $table->boolean('payment_status');
            $table->binary('image');
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
        Schema::dropIfExists('products_in_carts');
    }
};
