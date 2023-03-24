<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

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
    function savedata(Request $request)
    {
        // dd($request);
        $comment = new Comment();
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->phone = $request->input('phone');
        $comment->queries = $request->input('queries');
        // dd($comment);
        $comment->save();
        return redirect()->route('contact')->with('info','User Added Successfully');
    }
 
}
