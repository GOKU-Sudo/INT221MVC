<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function index(){
        return view('upload');
    }
    public function fileUpload(Request $request){
        $path=$request->file('file')->store('docs'); // docs is the folder where the 'file' will be stored and $path will store the path of the file
        // doesn't work without the docs folder
        echo "File has been uploaded successfully";
        return  $path; // returns the path of the file
    }
} 
