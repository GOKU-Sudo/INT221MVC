<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController1 extends Controller
{
    //

    public function storeRequestForm( Request $request){
        $name = $request->input('name');
        $email= $request->input('email');
        $password= $request->input('password');
    return "Name: ".$name." Email: ".$email." Password: ".$password;
    }
}
