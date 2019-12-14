<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
<<<<<<< HEAD
            $table->decimal('harga',8,0);
=======
            $table->string('harga');
>>>>>>> cfd4d277718e5ba2e70945c725667998e18447df
            $table->string('foto');
            $table->string('diskripsi');
            $table->string('kategori_id');
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
        Schema::dropIfExists('produk');
    }
}
