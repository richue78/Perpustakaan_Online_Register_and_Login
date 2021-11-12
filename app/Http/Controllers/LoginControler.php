<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControler extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'login'
        ]);
    }

    public function store(Request $request){
        $request->validate([
             'email'=>['required'],
             'password' => ['required','min:8','alpha_num','max:255']
        ]);
}
}