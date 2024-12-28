<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;  // Add this import

// class SessionController extends Controller
// {
//     //
//     public function setSession(Request $request){
//         // $request->session()->put('name','GOku');
//         // $request->session()->put(['name'=>'Goku','age'=>25]);
//         session(['name'=>'Goku','age'=>25]); // another way to set session data using session() method. it is global helper function
//         return "Session has been set";
        
//     }
//     public function getSession(Request $req){
//         // return "welcome ".session()->get('name');
//         // return $req->session()->all(); // returns all the session data in json format, using request object
//         return session()->all(); // returns all the session data in json format uisng global helper function

//     }
//     public function deleteSession(Request $req){
//         // $req->session()->forget('name'); // deletes the session data with key 'name'
//         // $req->session()->flush(); // deletes all the session data
//         $req->session()->pull('name'); // deletes the session data with key 'name' and returns the value of the deleted session data

//         return "Session has been deleted".$req;
//     }

//     public function checkSession(Request $req){
//     //   return session()->has('name')? "session exist":"session do not exist";  // returns true if session data with key 'name' exists, else returns false
//     return $req->session()->exists('name')? "session exist":"session do not exist"; // returns true if session data with key 'name' exists, else returns false and it also returns true if the session data exists but is null
//     }

// }



class SessionController extends Controller
{
    public function setSession(Request $request)
    {
        // Using Session facade
        Session::put('name', 'Goku');
        Session::put(['age' => 25, 'power' => 'Super Saiyan']);
        
        return "Session has been set";
    }

    public function getSession()
    {
        // Different ways to get session data using facade
        $name = Session::get('name');
        $allData = Session::all();
        $hasKey = Session::has('name');
        
        return $allData;
    }

    public function deleteSession()
    {
        // Different ways to remove session data
        Session::forget('name');     // Remove single item
        Session::pull('age');        // Get & remove
        Session::flush();            // Remove all data
        
        return "Session deleted";
    }
}

