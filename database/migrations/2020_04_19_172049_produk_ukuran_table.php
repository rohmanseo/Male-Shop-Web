<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProdukUkuranTable extends Migration
{
    
   public function up()
   {
       Schema::create('produk_ukuran', function (Blueprint $table) {
           $table->unsignedBigInteger('produk_id');
           $table->unsignedBigInteger('ukuran_id');
           $table->primary(['ukuran_id','produk_id']);
           $table->timestamps();

           $table->foreign('produk_id')->references('id')->on('produk');
           $table->foreign('ukuran_id')->references('id')->on('ukuran');
       });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::dropIfExists('produk_ukuran');
   }
}
