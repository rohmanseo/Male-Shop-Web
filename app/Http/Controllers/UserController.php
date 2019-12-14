<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
            $user = User::get();
        
        
       
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // User::create($request->all());
        $user=User::create([
        'nama'=> $request->nama,
        'email' => $request->email,
        'password' => $request->password,
        'no_telp'=> $request->no_telp,
        'alamat'=>$request->alamat,
        'foto'=> $request->foto,
        'api_token'=>bcrypt($request->email)
        
        ]);
        
        
        return redirect()->route('user.index')->with('pesan','berhasil di masukan');
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
        $user=User::findOrFail($id);
        return view('user.edit', compact('user'));
       
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
            'name'=>'min:4|required',
        ]);
        $user=User::find($id);
        $user->update($request->all());
        return redirect()->route('user.index')->with('pesan','berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id)->delete();
        
        return redirect()->route('user.index')->with('pesan','berhasil di hapus');
    }
    public function profil($id)
    {
        $user=User::find($id);
        return view('user.profil',['user'=> $user]);
    }

    
}
