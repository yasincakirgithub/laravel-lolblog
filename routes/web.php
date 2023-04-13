<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about/', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact/', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');


Route::get('/article/{id}/', [App\Http\Controllers\ArticleController::class, 'detail'])->name('article-detail');
Route::post('/article/save-comment/', [App\Http\Controllers\CommentController::class, 'save_comment'])->name('save-comment');
Route::post('/contact/save-contact/', [App\Http\Controllers\ContactController::class, 'save_contact'])->name('save-contact');


Auth::routes();