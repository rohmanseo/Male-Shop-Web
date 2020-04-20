<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use App\User_Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
  
    public function index(){
        $user = auth()->user();
        return response()->json([
            'status' => 'success',
            'data' => $user->cart
        ]);
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        User_Cart::create([
            'user_id' => $user->id,
            'produk_id' => $request->input('produk_id')
        ]);

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function show($id)
    {
        $data = Produk::findOrFail($id);
        return response()->json([
            "status" => "success",
            "data" => $data
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $user = auth()->user();
        $whishlist = User_Cart::where('user_id',$user->id)
                    ->where('produk_id',$id)->delete();

        return response()->json([
            'status' => 'suceess',
        ]);
    }

}
