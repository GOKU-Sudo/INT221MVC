<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ValidationController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RequestController1;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\CookieController2;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\blogpostController;



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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/student/{any}', [RequestController::class, 'implementsRequest']); // {any} is a wildcard that matches any character

Route::get('/student', [RequestController::class, 'implementsRequest'])->name('student'); // simply matches the URL /student and then it is named as student

Route::get('requestform', function () {
    return view('requestform');
});

Route::post('SubmitForm', [RequestController1::class, 'storeRequestForm'])->name('SubmitForm'); // named Route for the form submission using "{{ route('SubmitForm') }}" in the form action attribute

// Route::post('SubmitForm1',[ RequestController1::class, 'storeRequestForm1']) // hard coded route for the form submission using just url path ex- /SubmitForm

/**
 * diff between named route and hardcoded route is that named route is more flexible and can be used anywhere in the project
 * while hardcoded route is not flexible and can only be used in the same file
 * ex- named route can be used in the form action attribute as "{{ route('SubmitForm') }}" while hardcoded route can only be used as "/SubmitForm"
 * so when the url of SubmitForm changes in the future, we will have to change it in all the hardcoded routes where it is used like in requestform.blade.php action attribute
 * but in case of named route, we will only have to change it in the web.php file where the route is defined and it will be reflected everywhere in the project through the named route
 *
 */

// setting and getting cookies
Route::get('savecookie', [CookieController::class, 'saveCookie']);
Route::get('retrievecookie', [CookieController::class, 'retrieveCookie']);
Route::get('deletecookie', [CookieController::class, 'deleteCookie']);

// setting and getting cookies using Cookie facade
Route::get('setcookie', [CookieController2::class, 'setCookie']);
Route::get('getcookie', [CookieController2::class, 'getCookie']);
Route::get('removecookie', [CookieController2::class, 'removeCookie']);



//FormController for getting data and setting cookies

Route::get('formview', function () {
    return view('FormView');
});

Route::post('SubmitForm2', [FormController::class, 'setCookie'])->name('SubmitForm2');

//-------------------------------------

//SessionController

Route::get('setsession', [SessionController::class, 'setSession']);
Route::get('getsession', [SessionController::class, 'getSession']);
Route::get('deletesession', [SessionController::class, 'deleteSession']);
Route::get('checksession', [SessionController::class, 'checkSession']);

//LoginController session

Route::get('login', function () {
    return view('LoginView');
});
Route::post('LoginController', [LoginController::class, 'login'])->name('LoginController');

Route::get('profile', function () {
    if (session()->has('data')) {
        return view('Profile');
    } else {
        return view('LoginView');
    }
});

Route::get('logout', function () {
    session()->forget('data');
    return redirect('login');
})->name('Logout');


//______________________________
// databases and data feeding

Route::get('blogpost', [blogpostController::class, 'createBlogpost']);
Route::post('createBlogpostSubmit', [blogpostController::class, 'createBlogpostSubmit'])->name('createBlogpostSubmit');
Route::get('showblogpost', [blogpostController::class, 'showBlogpost']);

Route::get('viewblogpost/{id}', [blogpostController::class, 'viewBlogpost'])->name('viewblogpost');

Route::get('editblogpost/{id}', [blogpostController::class, 'editBlogpost'])->name('editblogpost');
Route::put('editBlogpostSubmit', [blogpostController::class,'editBlogpostSubmit'])->name('editBlogpostSubmit');

Route::get('deleteblogpost/{id}', [blogpostController::class, 'deleteBlogpost'])->name('deleteblogpost');

// --------------------------------
// form validation
Route::get('validation',[ValidationController::class,'index'])->name('fetch.form');
Route::post('validation-submit',[ValidationController::class,'submitValidation'])->name('submit.form');
//===================
//for file upload

Route::get('upload',[UploadController::class,'index'])->name('file.fetch');
Route::post('file-upload',[UploadController::class,'fileUpload'])->name('file.upload');


//=======CA2

Route::get("language",[LanguageController::class,'index']);
Route::post("language-post",[LanguageController::class,'postest'])->name('display');
Route::get("language-display",[LanguageController::class,'display'])->name('language-display');

//---controller resource

Route::resource('goods', 'App\Http\Controllers\GoodsController');

//--lan package

Route::get('testlocali/{lang}',function($lang){
    App
    ::setLocale($lang);
    return view('testlocali');
});