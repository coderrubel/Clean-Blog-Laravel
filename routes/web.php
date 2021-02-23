<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\page;
use App\Http\Controllers\post;
use App\Http\Controllers\catagory;
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
    return view('index');
});


// Page
Route::get('/support', [page::class, 'support']);
Route::get('/about',[page::class,'about']);
// Route::get('/post/',[page::class,'single_post']);
Route::get('/post/{id}',[page::class,'single_post']);


// post
Route::get('/add_new_post',[post::class,'add_post']);
Route::get('/all_post',[post::class,'allPost']);
Route::POST('/all_post',[post::class,'allPost']);
Route::POST('/add_new_post',[post::class,'AddPost']);
Route::get('/',[post::class,'ViewPost']);
Route::get('/delete_post/{id}',[post::class,'DeletePost']);
Route::get('/edit_post/{id}',[post::class,'EditPost']);
Route::POST('/update/{id}',[post::class,'UpdatePost']);

// Catagory
Route::get('/add_catagory',[catagory::class,'add_catagory']);
Route::POST('/add_catagory',[catagory::class,'AddCatagory']);
Route::get('/add_catagory',[catagory::class,'view_catagory']);
Route::get('/delete_catagory/{id}',[catagory::class,'delete_catagory']);
Route::get('/edit_catagory/{id}',[catagory::class,'edit_catagory']);
Route::POST('/update_catagory/{id}',[catagory::class,'update_catagory']);

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin');
})->name('admin');