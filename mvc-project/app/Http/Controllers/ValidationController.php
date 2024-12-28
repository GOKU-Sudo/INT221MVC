<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    //
    public function index(Request $request){
        return view('validation');
    }
    public function submitValidation(Request $request){
        $data = request()->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8',
            // 'password_confirmation' => 'required|same:password',
            // 'phone' => 'required|numeric|digits:10',
        ]);

        $messages=
        [
            'name.required' => 'Name is required error hai ye',
            'name.min' => 'Name should be minimum 3 characters error hai ye',
        ];
        $name=$request->name;
        echo $name.'<br>';
        $email=$request->email;
        echo $email.'<br>';
        print_r($data);
        return response()->json(['data' => $data]); // Return JSON response
    
    }
}
