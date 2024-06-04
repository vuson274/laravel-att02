<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function form(){
        return view('login');
    }

    public function login(Request $request){
        $data = $request->all();
        if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
            return redirect()->route('product');
        }
        return back();
    }

    public function logout(){
        Auth::logout();
    }
}
