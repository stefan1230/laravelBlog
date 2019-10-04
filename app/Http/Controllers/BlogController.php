<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
    	// $blogs = \App\Blog::all(); //fetch datas from blog table. Blog-->model
    	$blogs = Blog::latest()->get();// get all datas in DESC order.
    	return view('blog.index', compact('blogs'));
    }

    public function create(){
    	return view('blog.create');
    }

    public function store(Request $request){
    	$input = $request->all();

    	Blog::create($input);
    	return redirect('/blog');
    }

    public function show($id){
    	$blog = Blog::findorFail($id);
    	return view('blog.show', compact('blog'));
    }
}
