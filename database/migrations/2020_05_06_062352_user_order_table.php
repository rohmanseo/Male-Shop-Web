<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserOrderTable extends Migration
{

    public function up()
    {
        Schema::create('user_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('produk_id');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('produk_id')->references('id')->on('produk');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_order');
    }
}
