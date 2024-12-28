<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class LanguageController extends Controller
{
    //
    public function index()
    {
        return view('language');
    }

    public function postest(Request $request)
    {
        $language = $request->input('language');
        Cookie::queue(Cookie::make('name', $language, 40));
        return redirect('');   
    }

    public function display(){
        $languagedata = Cookie::get('name');
        return view('display', ['language' => $languagedata]);
    }
}
