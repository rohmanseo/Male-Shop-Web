<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProdukWarnaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_warna', function (Blueprint $table) {
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('warna_id');
            $table->primary(['warna_id','produk_id']);
            $table->timestamps();
            
            $table->foreign('produk_id')->references('id')->on('produk');
            $table->foreign('warna_id')->references('id')->on('warna');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_warna');
    }
}
