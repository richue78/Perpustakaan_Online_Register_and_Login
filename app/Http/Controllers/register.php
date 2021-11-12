<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    public function index(){
        return view('register.index',[
            'title'=>'register'
        ]);
    }

    public function store(Request $request){
       $request->validate([
            'Name'=>['required','min:3','max:22'],
            'Umur'=>['required','min:17'],
            'email'=>['required'],
            'password' => ['required','min:8','alpha_num','max:255']
       ]);

       
    }
}
