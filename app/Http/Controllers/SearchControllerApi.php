<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class SearchControllerApi extends Controller
{
    function index($query)
    {
        $produk = Produk::where('nama','LIKE',"%$query%")->get();
        return response()->json($produk);
    }
}
