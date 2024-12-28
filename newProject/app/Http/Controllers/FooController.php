<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooController extends Controller
{
    //
    public function displayFoo($mssg="default message"){
        $message=$this->showfoo($mssg);
        return $message;
        
    }

    private function showFoo($mssg){
        return $mssg;
    }
}
