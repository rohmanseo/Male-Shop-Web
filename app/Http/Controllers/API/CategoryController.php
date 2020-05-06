<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;
use App\User_Wishlist;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request,$id)
    {
        $kategori = Kategori::where('id',$id)->firstOrFail();
        $data = Produk::where('kategori_id',$kategori->id)->get();
        $userId = auth()->user()->id;
        $response = [];

        foreach($data as $d){
            $produkId = $d->id;

            $isFavorited = User_Wishlist::where('user_id',$userId)
            ->where('produk_id',$produkId)->count();
            $d['isFavorited'] = $isFavorited;
            $response[] = $d;

        }
        return response()->json([
            "status" => "success",
            "data" => $response
        ]);
        // return response()->json([
        //     'status' => 'success',
        //     'data' => $produk
        // ]);
    }
}
