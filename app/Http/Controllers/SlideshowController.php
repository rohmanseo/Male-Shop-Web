<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slideshow;

class SlideshowController extends Controller
{

    public function index()
    {
        $data = Slideshow::all();
        return view('slideshow.index')->with('data',$data);
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
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('uploads/',$request->file('gambar')->getClientOriginalName());
        }else{
            echo "Failed";
        }

    }

    public function destroy($id)
    {
        //
    }
}
