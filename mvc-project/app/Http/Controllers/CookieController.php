<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;


// controller for cookies setting and getting

class CookieController extends Controller
{
    //
    public function saveCookie()
    {

        $response = new Response("Hello World, going to set a cookie");
        $response->cookie('Cookie-name', "This is the value of cookie", 2); // 0.5 is the time in minutes for which the cookie will be stored
        return $response;

        // $response=new Response("Hello World, going to set a cookie");
        // $cookie=cookie('Cookie-name',"This is the value of cookie",2); // this create a cookie instance but does not set it in the browser
        // // so we have to return the response with the cookie set in it
        // return response('setting cookie')->cookie($cookie);
    }
    public function retrieveCookie(Request $request)
    {  // 
        $value = $request->cookie('Cookie-name');
        return $value;
    }
    public function deleteCookie(Request $request)
    { // to delete the cookie // manually
        $response = new Response("Cookie Deleted");
        return $response->cookie("Cookie-name", null, -0.1); // -0.1 is the time in minutes for which the cookie will be stored
    }
}
