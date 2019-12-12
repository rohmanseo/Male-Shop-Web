<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class CategoryControllerApi extends Controller
{
    public function show(Request $request)
    {
        $produk = Produk::where('kategori_id',1)->get();
        return response()->json($produk);
    }
}
