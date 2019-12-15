<?php

namespace App\Http\Controllers;

use App\User;
use App\User_Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index(Request $request)
    {
        $user = User::where('api_token',$request->api_token)->get();
        return response()->json($user);
    }
    function addProduk(Request $request)
    {
        $user = User::where('api_token',$request->api_token)->firstOrFail();
        User_Cart::create([
            'user_id' => $user->id,
            'produk_id' => $request->produk_id
        ]);
    }
}
