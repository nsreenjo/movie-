<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostConrtoller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/posts', [PostConrtoller::class, 'index'])->name(name:'index');

///////////////////////////////////////////////////////////////////
Route::get('/posts/creat', [PostConrtoller::class, 'creat'])->name(name:'creat');
Route::post("/posts",[PostConrtoller::class, 'store'])->name(name:"store");
///////////////////////////////////////////////////////////////////

Route::get('/posts/{post}', [PostConrtoller::class, 'show'])->name(name:'show');

///////////////////////////////////////////////////////////////////
Route::get("/posts/{post}/edit",[PostConrtoller::class,"edit"])->name(name:"edit");
Route::put("/posts/{post}",[PostConrtoller::class,"update"])->name(name:"update");
//////////////////////////////////////////////////////////////////

Route::delete("/post/{post}",[PostConrtoller::class,"delete"])->name(name:"destroy");



// creat table








 