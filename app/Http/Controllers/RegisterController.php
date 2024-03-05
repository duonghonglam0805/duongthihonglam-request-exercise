<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function getForm(){
        return view('form-register');
    }
    public function postForm(Request $request){
        $user = $request->input();
        return view('result')->with(['user'=> $user]);
    }
}