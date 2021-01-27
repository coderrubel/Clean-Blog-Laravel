<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\page;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
