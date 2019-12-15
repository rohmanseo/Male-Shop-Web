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
        Slideshow::create([
            'foto' => 'images.jpg'
        ]);
        return redirect('slideshow');
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

            $filename = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('uploads/',$filename);
            $slideshow = Slideshow::find($id);
            $slideshow->foto = $filename;
            $slideshow->save();


        }else{
            echo "Failed";
        }

        return redirect('slideshow');


    }

    public function destroy($id)
    {
        //
    }
}
