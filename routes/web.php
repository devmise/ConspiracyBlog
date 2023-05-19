<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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
Route::get('/blog', [PostsController::class, 'index'])->name('posts.index');

Route::get('/', [PagesController::class, 'index']);


Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/posts/{post}/comments', [PostsController::class, 'storeComment'])
    ->middleware('auth')
    ->name('comments.store');


Route::get('/posts/search', [PostsController::class, 'search'])->name('posts.search');



