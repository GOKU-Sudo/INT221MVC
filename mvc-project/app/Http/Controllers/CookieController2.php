<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class CookieController2 extends Controller
{
    //
    public function setCookie(Request $request){
        return Cookie::queue(Cookie::make("cookieName","This is the value of the cookie",20));
    }

    public function getCookie(Request $request){

        
        $retrievedCookie=Cookie::get('cookieName');

        return response()->json(['cookie_value' => $retrievedCookie]);

    }
    public function removeCookie(Request $request){
        Cookie::expire("cookieName");
        return new Response("Cookie Deleted");
    }
}
