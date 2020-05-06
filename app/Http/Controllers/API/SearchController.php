<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use App\User_Wishlist;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
  
    public function index($keyword){
        $data = Produk::where('nama','LIKE',"%$keyword%")->get();
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
        //     'data' => $data
        // ]);
    }

}
