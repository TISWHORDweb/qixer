<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'user'])->name('user');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/blog', [UserController::class, 'blog'])->name('blog');
Route::get('/category', [UserController::class, 'category'])->name('category');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/service-list', [UserController::class, 'service_list'])->name('service-list');
Route::get('/service-details', [UserController::class, 'service_details'])->name('service-details');
Route::get('/blog-details', [UserController::class, 'blog_details'])->name('blog-details');
Route::get('/faq', [UserController::class, 'faq'])->name('faq');
