<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function index()
    {
        $data = Produk::get();
        return response()->json([
            "status" => "success",
            "data" => $data
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
        return response()->json([
            "status" => "success",
            "data" => $data
        ]);
    }

    public function new()
    {
        $produk = Produk::orderBy('created_at','desc')->limit(10)->get();
        return response()->json([
            "status" => "success",
            "data" => $produk
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
        //
    }
}
