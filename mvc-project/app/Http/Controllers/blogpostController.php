<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogpostController extends Controller
{
    //
    public function createBlogpost(){
        return view('blogpost');
    }

    public function createBlogpostSubmit(Request $req){
        // DB::table('blogposts')->insert([ // this is the query builder method
        //     'title'=>$req->title,
        //     'body'=>$req->body
        // ]);
        
        Blogpost::create([
            'title' => $req->input('title'),
            'body' => $req->body,
        ]);
        return redirect('showblogpost')->with('status','Blogpost created successfully');

    }

    public function showBlogpost(){
        // $blogpost=DB::table('blogposts')->orderBy('created_at','desc')->get(); // this is the query builder method
        $blogpost=Blogpost::orderBy('created_at','desc')->get(); // this is the eloquent method
        return view('showblogpost',['blogpost'=>$blogpost]);
    }

    public function viewBlogpost($id){
        // $blogpost=DB::table('blogposts')->where('id',$id)->first();
        $blogpost=Blogpost::where('id',$id)->first();
        return view('viewblogpost',['blogpost'=>$blogpost]);
    }
    public function editBlogpost($id){
        // $blogpost=DB::table('blogposts')->where('id',$id)->first();
        $blogpost=Blogpost::where('id',$id)->first();
        return view('editblogpost',['blogpost'=>$blogpost]);
    }

    public function editBlogpostSubmit(Request $req){
        echo "editBlogpostSubmit method called<br>";
        // DB::table('blogposts')->where('id',$req->id)->update([
        //     'title'=>$req->title,
        //     'body'=>$req->body
        // ]);
        $blogpost=Blogpost::find($req->id);
        $blogpost->title=$req->title;
        $blogpost->body=$req->body;
        return redirect('showblogpost')->with('status','Blogpost updated successfully');
    }

    public function deleteBlogpost($id){
        // DB::table('blogposts')->where('id',$id)->delete();
        $blogpost=Blogpost::find($id);
        $blogpost->delete();
        return redirect('showblogpost')->with('status','Blogpost deleted successfully');
    }
}
