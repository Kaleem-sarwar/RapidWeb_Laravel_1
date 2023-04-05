<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    //
    function blog()
    {
        return view('home');
    }
    function about()
    {
        return view('about');
    }
    function services()
    {
        return view('services');
    }
    function viewform()
    {
        return view('contact');
      
    } 
    function modal()
    {
        return view('modal');
      
    } 
    function savedata(Request $request)
    {
        $comment = new Comment();
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->phone = $request->input('phone');
        $comment->queries = $request->input('queries');
        $comment->save();
        return redirect()->route('contact')->with('info','User Added Successfully');
    }
    public function index()
    {
        return view('index');
    }
    public function display()
    {
        //table comment from which data will be fetch on index page
        $comment= Comment::all();
        return view('index',['members'=>$comment])->with('You have entered the record');
        
     }
    public function delete($id)
    {   
        DB::delete('delete from comments where id = ?',[$id]);
        return redirect('index');
    }

    public function edit($id)
    {
         $comments= Comment::find($id);
         return view('index',['members'=>$comments]);
    }
    public function update(Request $req)
    { 
        $members = Comment::find($req->id);
        $members->name= $req->name;
        $members->email= $req->email;
        $members->phone= $req->phone;
        $members->queries= $req->queries;
        $members->save();
        return redirect('index');
    }
}
