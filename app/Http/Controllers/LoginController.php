<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index() {
        return view('base');
    }
    
    public function enter(Request $req) {

        $req->validate([
           'rfc'    => 'required|size:13|alpha_num', 
           'pwd'   => 'required'
        ]);
        
        $auth = \App\Usuario::where('RFC', $req->rfc)->where('Password', md5($req->pwd))->first();

        if($auth){
            Auth::loginUsingId($auth->id);
//            dd(auth()->check());
            return redirect()->intended();
        }

        return redirect()->route('login.index')->withInput();
    }
    
    public function out(Request $req) {
//        $req->session()->flush();
        auth()->logout();
        return redirect()->route('login.index');
    }
}
