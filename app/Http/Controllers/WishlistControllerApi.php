<?php

namespace App\Http\Controllers;

use App\User;
use App\User_Wishlist;
use Illuminate\Http\Request;

class WishlistControllerApi extends Controller
{
    public function show($api)
    {
        $user = User::where('api_token',$api)->firstOrFail();
        return response()->json($user->wishlist);
    }

    function addProduk(Request $request)
    {
        $user = User::where('api_token',$request->api_token)->firstOrFail();
        User_Wishlist::create([
            'user_id' => $user->id,
            'produk_id' => $request->produk_id
        ]);
    }
}
