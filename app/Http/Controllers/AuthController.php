<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function loginProcess(Request $request){
        //dd($request->all());
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->to('admin');
        }
        return redirect()->to('admin-login');
    }
}
