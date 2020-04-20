<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
  
    public function index($keyword){
        $data = Produk::where('nama','LIKE',"%$keyword%")->get();
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

}
