<?php

// echo "Hello World!";

// echo " This is php project";

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/main', function () {
    $name="goku";
    echo "hi"." ".$name;
     
 });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo "Hi bhai <br> how are you?";
    return "Hello world.";

});

Route::get('/hello', function () {
    echo "Hi bhai <br> how are you?";
    return "Hello world, world hello";

});    // latest one gets updated, no error is shown

Route::get('/show', function () {

    $student=["name"=>"goku","year"=>2024];
    $fruit=["apple","mango"
    ];
    // return $student["name"];
    return $fruit[0];

});


Route::get("/candidate/{name}/{a}/{b}",function($name,$a,$b){
    echo $a+$b;
    return "Name of the student is $name";
}
);  //fetching the date from the url, mandatory paremaeter

Route::get("/candidate/{name?}",function($name="Hero"){

    return "Name of the student is $name";
}
);  //fetching the date from the url, optional parameter






