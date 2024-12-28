<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(Request $req){
 
        $req->session()->put('data',$req->input()); // $ req->input() returns all the input data in the form of an array
        return redirect('profile');
    }
}
