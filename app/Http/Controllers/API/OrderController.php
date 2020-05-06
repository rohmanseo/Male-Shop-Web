<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Produk;
use App\User_Order;
use App\User_Cart;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function order(Request $request)
    {
        $user = auth()->user();
        $cart = User_Cart::where('user_id',$user->id);

        foreach($cart->get() as $w){
                $produkId = $w['produk_id'];
                $userId = $w['user_id'];
                $qty = $w['qty'];

                User_Order::create([
                    'user_id' => $userId,
                    'produk_id' => $produkId,
                    'qty' => $qty
                ]);
        }
        $cart->delete();

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function index()
    {
        $data = auth()->user()->order;
        
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
