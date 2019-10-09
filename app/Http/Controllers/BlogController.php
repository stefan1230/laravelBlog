<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use Illuminate\Support\Arr;

class BlogController extends Controller
{
	public function __construct(){
		$this->middleware('auth',['except'=> ['index', 'show']]); //included in Http/Kernel;
		//except index & show method, other methods cannot be accessed without loggin.
	}
	

    public function index()
    {
    	// $blogs = \App\Blog::all(); //fetch datas from blog table. Blog-->model
    	$blogs = Blog::latest()->get();// get all datas in DESC order.
    	return view('blog.index', compact('blogs'));
    }

    public function create(){
        $category = \App\Category::pluck('name', 'id');
    	return view('blog.create',compact('category'));
    }

    public function store(Request $request){
    	$input = $request->all();
    	$blog = Blog::create($input);
        if($categoryIds = $request->category_id){
            $blog->category()->sync($categoryIds);
        }
    	return redirect('/blog');
    }

    public function show($id){
    	$blog = Blog::findorFail($id);
    	return view('blog.show', compact('blog'));
    }

    public function edit($id){
        $categories = \App\Category::pluck('name', 'id')->toArray();
        //$categories = Category::latest()->get();
    	$blog = Blog::findorFail($id);
    	return view('blog.edit', ['blog'=>$blog,'categories'=>$categories]);
        
         // dd($categories);
        //return view('blog.test');
        // $categories = \App\Category::latest()->get();
        // $blog = Blog::findorFail($id);

        // foreach ($categories as $category) {
        //     foreach ($blog->category as $cat) {
        //         if(in_array($cat->id, $category->id))
        //             echo "string";

        //     }
        // }
        
        // $bc = array();
        // foreach ($blog->category as $cat) {
        //     $bc[] = $cat->id;
        // }

        // dd($bc);
        //$filltered = Arr::except($categories, $bc);
        //dd($filltered);
        //dd(in_array($blog->category, ));
        //return view('blog.edit', ['blog'=>$blog,'categories'=>$categories, 'filltered'=>$filltered ]);


    }

    public function update(Request $request, $id){
    	$input= $request->all();
    	$blog = Blog::findorFail($id);
    	$blog->update($input);
        if($categoryIds = $request->category_id){
            $blog->category()->sync($categoryIds);
        }
    	return redirect('/blog');
    	// var_dump($input);
    }

    public function destroy(Request $request, $id){
    	$blog = Blog::findorFail($id);
        $categoryIds = $request->category_id;
        $blog->category()->detach($categoryIds);
    	$blog->delete($request->all());
    	return redirect('/blog/bin');
    }

    public function bin(){

    	$deletedBlogs = Blog::onlyTrashed()->get();
    	return view('blog.bin', compact('deletedBlogs'));

    }


    public function restore($id){
    	$restoreBlog = Blog::onlyTrashed()->findorFail($id);
    	$restoreBlog->restore($restoreBlog);
    	return redirect('/blog');
    }

    public function destroyBlog($id){
    	$destroyBlog = Blog::onlyTrashed()->findorFail($id);
    	$destroyBlog->forceDelete($destroyBlog);
    	return back();
    }
}
