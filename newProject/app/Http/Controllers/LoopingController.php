<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopingController extends Controller
{
    //
    public function showUsers(){
        $users=['goku','hero','vegeta'];
        // $users=[];
        return view('looping',['users'=>$users]);
    }
}
