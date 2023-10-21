<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [PageController::class, 'index'] );
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
Route::get('/user', [PageController::class, 'user']);



Route::get('/', [HomeController::class,'index']);
Route::get('/home', [HomeController::class,'index']);
Route::prefix('home')->group(function(){
    Route::get('/product', [ProductController::class, 'product']);
});
Route::get('/news/{judul}', [NewsController::class,'newsdetail']);
Route::get('/news', [NewsController::class,'news']);

Route::prefix('home')->group(function(){
Route::get('/program', [ProgramController::class, 'index']);  
});

Route::get('/about', [AboutController::class, 'about']);
Route::resource('contact', ContactController::class);

