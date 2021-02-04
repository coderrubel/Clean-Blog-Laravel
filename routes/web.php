<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\page;
use App\Http\Controllers\post;
use App\Http\Controllers\poscatagoryt;
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
Route::get('/post',[page::class,'single_post']);


/* Post */
Route::get('/add_new_post',[post::class,'add_post']);
// Route::POST('/add_new_post',[post::class,'AddPost']);
Route::get('/add_catagory',[post::class,'add_catagory']);
Route::POST('/add_catagory',[post::class,'DataAdd']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin');
})->name('admin');