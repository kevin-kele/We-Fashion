<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;

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


Route::get('/',[MainController::class,'home'])->name('articles');
Route::get('/articles/{slug}',[ArticleController::class,'show'])->name('article');

Auth::routes();

Route::get('/admin/articles',[ArticleController::class,'index'])->middleware('admin')->name('product.index');

Route::get('/admin/articles/create',[ArticleController::class,'create'])->middleware('admin')->name('product.create');

Route::post('/admin/articles/store',[ArticleController::class,'store'])->middleware('admin')->name('product.store');

Route::get('/admin/articles/{article}/edit',[ArticleController::class,'edit'])->middleware('admin')->name('product.edit');

Route::put('/admin/articles/{article}/update',[ArticleController::class,'update'])->middleware('admin')->name('product.update');


Route::delete('/admin/articles/{article}/delete',[ArticleController::class,'delete'])->middleware('admin')->name('product.delete');