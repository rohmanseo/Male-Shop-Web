<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slideshow;

class SlideshowController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    function index()
    {
        $slideshow = Slideshow::all();
        return response()->json([
            'status' => 'success',
            'data' => $slideshow
        ]);
    }
}
