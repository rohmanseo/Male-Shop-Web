<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request,$id)
    {
        $kategori = Kategori::where('id',$id)->firstOrFail();
        $produk = Produk::where('kategori_id',$kategori->id)->get();
        return response()->json([
            'status' => 'success',
            'data' => $produk
        ]);
    }
}
