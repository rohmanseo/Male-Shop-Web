<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Produk;
use App\User_Wishlist;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
  
    public function index(){
        $data = auth()->user()->wishlist;
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
        //     'data' => $user->wishlist
        // ]);
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'produk_id'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = auth()->user();
        User_Wishlist::create([
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
        $whishlist = User_Wishlist::where('user_id',$user->id)
                    ->where('produk_id',$id)->delete();

        return response()->json([
            'status' => 'suceess',
            
        ]);
    }

}