<?php
use Illuminate\Support\Facades\Route;

Route::get('/marks/{marks}', function ($marks) {
      if(80<=$marks and $marks<=100){
            return "A+";
      }
      else if(40<=$marks and $marks<80){
            return "B";
      }
     else if($marks<40){
      return "Fail";
     }
     else {
      return "Invalid marks";
     }
});

Route::get('/test2', function () {
    return view('test',["name"=>"GOKU","profile"=>"Super Saiyan"]); // second argument 
      // is used to pass data to view
});

// Route::view('test', 'test');// url,viewname -> this works only when only view is used not controller

// Route::get('/home/{rollno}/{marks}', function ($rollno,$marks) {
//     return view('home',["rollno"=>$rollno,"marks"=>$marks]);
// });

Route::view('home/{rollno}/{marks}', 'home');

Route::get('hero',function(){
      return view('test1');
});

// <---------------------------------------Redirecting------------------>

Route::get('greetings/admissions/query/registration/{name?}',function($name="student"){
      return "Greetings to $name";
})->name('greet');   // this will redirect to the given url
// this is used to give name to the route

Route::get('redirect',function(){
      return redirect()->route('greet');
});
Route::get('redirect/{name?}',function($name){
      return redirect()->route('greet',['name'=>$name]);
});

Route::get('redirect2',function(){
      return redirect('greetings/admissions/query/registration'); // this will redirect to the given url
}); // another way to redirect

Route::redirect('redirect3/{name}','/greetings/admissions/query/registration/$name'); // this will redirect to the given url
// another way to redirect
// / is put comma before greetings because otherwise it will concate with the url 


// <==================================> ways to pass the data

Route::get('customerdetails',function(){
    
      return view('customerdetails',["customer"=>"goku","oderno"=>1]); //associative array
});

Route::get('customerdetails',function(){
    
      return view('customerdetails')->with ('custname','goku')->with('orderno',1); //another way to pass data
});

Route::get("customerdetails/{customer}/{oderno}",function($customer,$oderno){
      return view('customerdetails',compact); //another way to pass data

});

// <+++++++++++++++++++++++++++++++++> view redirect
Route::get('customerdetails',function(){
    
      return view('customerdetails',["customer"=>"goku","oderno"=>1]);
})->name('custDetails');


Route::get('custRedirect',function(){
    
      return redirect()->route('custDetails');
});

// <========================================>
Route::get('students',function(){
      $student=[
            ["name"=>"goku","rollno"=>1,"marks"=>90],
            ["name"=>"vegeta","rollno"=>2,"marks"=>80],
            ["name"=>"piccolo","rollno"=>3,"marks"=>70],
            ["name"=>"krillin","rollno"=>4,"marks"=>60],
            ["name"=>"gohan","rollno"=>5,"marks"=>50],
            ["name"=>"trunks","rollno"=>6,"marks"=>40],
            ["name"=>"goten","rollno"=>7,"marks"=>30],
            ["name"=>"bulma","rollno"=>8,"marks"=>20],
            ["name"=>"chichi","rollno"=>9,"marks"=>10],
            ["name"=>"yamcha","rollno"=>10,"marks"=>0]
      ];
      return view('students',["students"=>$student]);
});

Route::get("homePage",function(){

     
      return response("Hello",200)-> header("data2","student data2")
      ->header("data3","student data3");

});

Route::get("homePage2",function(){

     
      return response("Hello",200)-> withHeaders(["data2"=>"student data2","data3"=>"student data3"]);   

});

Route::get("homePage3",function(){   
      return response()->json(["name"=>"goku","email"=>"goku@gmail.com"])->withHeaders(["data2"=>"student data2","data3"=>"student data3"]);   

});

Route::get("homePage4",function(){   
      return response("hello your cookies is")->cookie("name","goku",60);   // 60 is the time in minutes , this will set the cookie
}); // laravel way to set cookie
Route::get("homePage5",function(){   
      return setcookie("name","goku ki cookie",time()+1);   // 60 is the time in seconds , this will set the cookie
}); // this is not laravel way to set cookie, it is native php way
//return boolean value, does not return the http response object pr string and cannot be
// chained with other methods

// <+++++++++++++++++++++++++++++++++++++++++++++++>> Controller



use App\Http\Controllers\ProductsController;
use App\Http\Controllers\FooController;

Route::get('/products', [ProductsController::class, 'productsdisplay']);

//types of route

Route::get('/foo/{message?}',[FooController::class,'displayFoo'])->name('testfoo'); //named direct

Route::get('fooredirect/{message?}',function($message){
      return redirect()->route('testfoo',['message'=>$message]); //redirect
});

Route::get('fooredirect2',function(){
      return redirect()->action([FooController::class,"display"]);
});


//////////////////
use App\Http\Controllers\DiscountController;
Route::get("discount/{price}/{discount}",[DiscountController::class,'calculate']);


/// working with constraints parameters////////////


Route::get('constraints/{cid}/{name}',function($cid,$name){
      return "Your id is :".$cid." Name is :".$name;     
})->where('cid','[0-9]+')->where('name','[A-za-z]+'); // can also use '[A-z]' to use A to z letters// '+' is used to take many digits and letters
// this is chained method


Route::get('constraints1/{regnum}',function($regnum){
      return "Your id is :".$regnum;     
})->where('regnum','[0-z]+'); //for combination of not all characters (ASCII)
// but if we use [A-za-z0-9] then we only we get combo of letters and digits


Route::get('constraints2/{no}',function($no){
      return "Your id is :".$no;   
})->whereNumber('no'); //excepts only numbers

Route::get('constraints3/{name}',function($name){
      return "Your name is:".$name;   
})->whereAlpha('name'); //excepts only characters
//if want to take multiple alpha parameters then use multiple whereAlpha with chaining

Route::get('constraints4/{no}/{name}',function($no,$name){
      return "Your id is :".$no." name is :".$name;
})->whereNumber('no')->whereAlphaNumeric('name'); //wherAlphaNumeric is combo of numbers and 

////blade template view---------------------------->

Route::get('showUsers',function(){
      return view('showUsers',['newuser'=>"goku"]);
});


use App\Http\Controllers\LoopingController;
Route::get('showUsers2',[LoopingController::class,'showUsers']);