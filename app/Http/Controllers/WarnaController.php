<?php

namespace App\Http\Controllers;
use App\Warna;
use Illuminate\Http\Request;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warna=Warna::get();
        return view('warna.index',compact('warna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'min:4|required',
        ]);

        $warna=Warna::create($request->all());
        return redirect()->route('warna.index')->with('pesan','berhasil di masukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warna=Warna::findOrFail($id);
        return view('warna.edit', compact('warna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=>'min:4|required',
        ]);
        $warna=Warna::find($id);
        $warna->update($request->all());
        return redirect()->route('warna.index')->with('pesan','berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $waran=Warna::find($id)->delete();
        
        return redirect()->route('warna.index')->with('pesan','berhasil di hapus');
    }
}
