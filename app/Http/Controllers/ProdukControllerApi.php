<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukControllerApi extends Controller
{
    
    public function showProduk()
    {
        $produks = Produk::all();
        return response()->json($produks);
    }

    public function newArrival()
    {
        $produk = Produk::orderBy('created_at','desc')->limit(10)->get();
        return response()->json($produk,201);
    }
}
