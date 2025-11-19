<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactPageController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProcessController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\ProductController;
use Illuminate\Support\Facades\Route;

 


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/process', [ProcessController::class, 'index'])->name('process');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product-detail');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog-detail');
Route::get('/contact', [ContactPageController::class, 'index'])->name('contact.page');
Route::post('/contact-submit', [ContactPageController::class, 'submit'])->name('contact.submit');
