<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admincontroller;

class logincontroller extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login_proses(Request $request){

        $data = [
            'username' => $request->username,
            'password' => $request ->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin');
        }else{
            return redirect()->route('login');
        };
    }

    public function logout(Request $request){

        Auth::logout();

        return view('auth.login');
    }
    
}
