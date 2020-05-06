<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use App\User_Wishlist;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function index()
    {
        $data = Produk::get();
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
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $data = Produk::findOrFail($id);

        $userId = auth()->user()->id;
        $response = [];

    
        $produkId = $data->id;

        $isFavorited = User_Wishlist::where('user_id',$userId)
        ->where('produk_id',$produkId)->count();
        $data['isFavorited'] = $isFavorited;

        return response()->json([
            "status" => "success",
            "data" => $data
        ]);
    }

    public function new()
    {
        $data = Produk::orderBy('created_at','desc')->limit(10)->get();
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
        //     "status" => "success",
        //     "data" => $produk
        // ]);
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
        //
    }
}
