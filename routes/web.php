<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\ProcessController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactPageController;

// Root redirect → default language
Route::get('/', function () {
    return redirect('/az');
});

// LOCALE GROUP
Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => 'az|en|ru']
], function () {

    // HOME
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // ABOUT
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    // SERVICES
    Route::get('/services', [ServiceController::class, 'index'])->name('services');

    // PROCESS
    Route::get('/process', [ProcessController::class, 'index'])->name('process');

    // PRODUCTS LIST
    Route::get('/products', [ProductController::class, 'index'])->name('products');

    // PRODUCTS BY CATEGORY
    Route::get('/products/category/{category}', [ProductController::class, 'byCategory'])
        ->name('products.byCategory');

    // PRODUCT DETAIL
    Route::get('/product/{product}', [ProductController::class, 'show'])
        ->name('product.detail');

    // PRODUCT REVIEW
    Route::post('/product/{product}/review', [ProductController::class, 'storeReview'])
        ->name('product.storeReview');

    // BLOG LIST
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');

    // BLOG DETAIL (SLUG və ya ID — hansını istifadə edirsənsə onu seç!)
    Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.detail');

    // CONTACT PAGE
    Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');

    // CONTACT SUBMIT FORM
    Route::post('/contact-submit', [ContactPageController::class, 'submit'])
        ->name('contact.submit');
});
