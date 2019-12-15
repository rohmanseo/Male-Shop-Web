<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;
use App\Produk;
use Psy\Util\Str;

class CategoryControllerApi extends Controller
{
    public function show(Request $request,$nama)
    {
        $kategori = Kategori::where('nama',$nama)->firstOrFail();
        $produk = Produk::where('kategori_id',$kategori->id)->get();
        return response()->json($produk);
    }
}
