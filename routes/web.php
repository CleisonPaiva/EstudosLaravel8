<?php

use App\Http\Controllers\PostsController;
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

Route::get('/posts',[PostsController::class,'index'])->name('index');
Route::any('/posts/search',[PostsController::class,'search'])->name('search');
Route::get('/posts/create',[PostsController::class,'create'])->name('create');
Route::post('/posts/store',[PostsController::class,'store'])->name('store');
Route::get('/posts/{id}',[PostsController::class,'show'])->name('show');
Route::delete('/posts/{id}',[PostsController::class,'destroy'])->name('destroy');
Route::get('/posts/edit/{id}',[PostsController::class,'edit'])->name('edit');
Route::put('/posts/{id}',[PostsController::class,'update'])->name('update');

Route::get('/', function () {
    return view('welcome');
});
