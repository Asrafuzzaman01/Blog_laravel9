<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categorycontroller;
use App\Http\Controllers\postcontroller;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;


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

Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    // return view('layouts.website');
    return view('website.home');
});
Route::get('/ about', function () {
   
    return view('website.about');
});
Route::get('/post', function () {
   
    return view('website.post');
});

Route::get('/category', function () {
   
    return view('website.category');
});

Route::get('/contact', function () {
   
    return view('website.contact');
});


//admin panel 

Route::get('/adminhome', function () {
   
    return view('admin.home');
});

Route::get('/addpost', function () {
   
    return view('admin.addpost');
});
Route::get('/allUser', function () {
   
    return view('admin.alluser');
});
Route::get('/viewPost', function () {
   
    return view('admin.viewpost');
});

Route::get('/post', [postcontroller::class , "all_post"]);











Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
