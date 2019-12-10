<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request, User $user)
    {
        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:6'
        ]);

        $user->create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'api_token' => bcrypt($request->email)
        ]);

    }
    public function login(Request $request)
    {
//        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
//            $res = [
//                'msg' => 'error, failed logged in',
//                'email' => $request->email,
//                'password' => $request->password,
//            ];
//            return response()->json($request,404);
//        }

        $user = User::all()->where('email',$request->email)->first();
        if (!$user)
        {
            return 'Error 404';
        }

        if ($request->email == $user->email)
        {
            return 'logged in';
        }

    }
}
