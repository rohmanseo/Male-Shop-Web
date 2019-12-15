<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slideshow;

class SlideshowApi extends Controller
{
    function index()
    {
        $slideshow = Slideshow::all();
        return response()->json($slideshow);
    }
}
