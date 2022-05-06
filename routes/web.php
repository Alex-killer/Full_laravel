<?php

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

Route::view('/', 'home.index')->name('home');

Route::middleware('guest')->group(function(){
    Route::get('register', 'RegisterController@index')->name('register');
    Route::post('register', 'RegisterController@store')->name('register.store');

    Route::get('login', 'LoginController@index')->name('login');
    Route::post('login', 'LoginController@store')->name('login.store');
});

Route::get('blog', 'BlogController@index')->name('blog');
Route::get('blog/{post}', 'BlogController@show')->name('blog.show');
Route::post('blog/{post}/like', 'BlogController@like')->name('blog.like');

//Route::prefix('user')->middleware('auth', 'active')->group(function (){
Route::prefix('user')->group(function (){
    Route::redirect('/', '/user/posts')->name('user');

    Route::get('posts', 'PostController@index')->name('user.posts');
    Route::get('posts/create', 'PostController@create')->name('user.posts.create');
    Route::post('posts', 'PostController@store')->name('user.posts.store');
    Route::get('posts/{post}', 'PostController@show')->name('user.posts.show');
    Route::get('posts/{post}/edit', 'PostController@edit')->name('user.posts.edit');
    Route::patch('posts/{post}', 'PostController@update')->name('user.posts.update');
    Route::delete('posts/{post}', 'PostController@delete')->name('user.posts.delete');
    Route::post('posts/{post}/like', 'PostController@like')->name('user.posts.like');
});
