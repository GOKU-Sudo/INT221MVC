<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    //
    public function implementsRequest(Request $reqst){
        $path = $reqst->path();
        echo 'Path: '.$path."<br>";
        $pattern=$reqst->is('student/*'); // returns true if the current request URL matches the pattern
        // 'student/*' means that the URL should start with student/ and can have any characters after that
        echo "Does my url match the pattern student/*? ".$pattern."<br>"; // return 1 if the current request URL matches the pattern
        // else return nothing

        if($reqst->is('student/*')){
            echo "Yes, my url matches the pattern student/*"."<br>";
        }else{
            echo "No, my url does not match the pattern student/*"."<br>";
        }

        $isMethod = $reqst->method();
        echo "Method: ".$isMethod."<br>";
        $isMethod=$reqst->isMethod('get');
        echo "Is the method get? ".$isMethod."<br>";    

        $routeIs=$reqst->routeIs('student');
        echo "Is the route student? ".$routeIs."<br>"; // return 1 if the current request URL matches the pattern
        // else return nothing

        $url=$reqst->url();
        echo "The url is ".$url."<br>";

        $fullUrl=$reqst->fullurl();
        echo "The full url is ".$fullUrl."<br>";

        
    }
}
