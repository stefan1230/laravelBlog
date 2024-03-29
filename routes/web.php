<?php

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

Route::get('/blog/bin', 'BlogController@bin');
Route::get('/blog/bin/{id}/restore', 'BlogController@restore');
Route::delete('/blog/bin/{id}/destroyBlog', 'BlogController@destroyBlog');


Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/create', 'BlogController@create');
Route::post('/blog/store', 'BlogController@store');
Route::get('/blog/{id}', 'BlogController@show');
Route::get('/blog/{id}/edit', 'BlogController@edit');
Route::patch('/blog/{id}', 'BlogController@update');
Route::delete('/blog/{id}', 'BlogController@destroy');


Route::get('admin','AdminController@index');//->middleware('admin'); //include http/Kernel

Route::resource('category','CategoryController');

//Auth Routess
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
