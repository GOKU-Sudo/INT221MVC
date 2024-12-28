<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogpostController extends Controller
{
    //
    public function createBlogpost(){
        return view('blogpost');
    }
}
