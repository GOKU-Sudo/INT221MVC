<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class FormController extends Controller
{
    public function setCookie(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');

        return Cookie::queue(Cookie::make("cName",$name." ".$email." ".$password,20));

    }

}
