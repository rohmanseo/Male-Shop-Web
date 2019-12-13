<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:6'
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'api_token' => bcrypt($request->email)
        ]);
        $res = ['message:' => 'success'];
        return response()->json($res,201);

    }
    public function login(Request $request)
    {

        $user = User::where('email',$request->email)->first();
        if (!$user)
        {
            return 'Error 404';
        }

        if ($request->password == $user->password)
        {
            return 'logged in';
        }

    }
}
