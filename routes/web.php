<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\AnnouncementsController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\ProcessController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ConsumerElectronicsController;
use App\Http\Controllers\Front\ContactPageController;
use App\Http\Controllers\Front\HomeApplianceController;
use App\Http\Controllers\Front\OverviewController;
use App\Http\Controllers\Front\ElectricalEquipmentController;
use App\Http\Controllers\Front\GuidesTutorialsController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\SecurityOverviewController;
use App\Http\Controllers\Front\TechnicalContentController;
use App\Http\Controllers\Front\TechnicalServicesController;
use App\Http\Controllers\Front\WarrantyController;
use App\Http\Controllers\SubscribeController;

// Root redirect → default language
Route::get('/', function () {
    return redirect('/az');
});

// LOCALE GROUP
Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => 'az|en|ru|de|es|fr|zh'],
    'middleware' => 'applyLocale'
], function () {

    // HOME
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // ABOUT
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    // // SERVICES
    // Route::get('/services', [ServiceController::class, 'index'])->name('services');

    // // PROCESS
    // Route::get('/process', [ProcessController::class, 'index'])->name('process');

    // PRODUCTS LIST
    Route::get('/products', [ProductController::class, 'index'])->name('products');

    // PRODUCTS BY CATEGORY
    Route::get('/products/category/{category}', [ProductController::class, 'byCategory'])
        ->name('products.byCategory');

    // PRODUCT DETAIL
    Route::get('/product/{product:slug}', [ProductController::class, 'show'])
        ->name('product.detail');


    // PRODUCT REVIEW
    Route::post('/product/{product}/review', [ProductController::class, 'storeReview'])
        ->name('product.storeReview');

    // BLOG LIST
    // Route::get('/blog', [BlogController::class, 'index'])->name('blog');

    // BLOG DETAIL (SLUG və ya ID — hansını istifadə edirsənsə onu seç!)
    // Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.detail');

    // CONTACT PAGE
    Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');

    // CONTACT SUBMIT FORM
    Route::post('/contact-submit', [ContactPageController::class, 'submit'])
        ->name('contact.submit');

    Route::get('/overview/{slug}', [OverviewController::class, 'show'])
        ->name('overview');






    ///////TEZE///////////








    Route::get('/security-overview', [SecurityOverviewController::class, 'index'])
        ->name('security.overview');

    Route::get('/home-appliances', [HomeApplianceController::class, 'index'])
        ->name('home.appliances');

    Route::post('/subscribe', [SubscribeController::class, 'store'])
        ->name('subscribe.store');

    Route::get('/electrical-equipment', [ElectricalEquipmentController::class, 'index'])
        ->name('electrical.equipment');

    Route::get('/consumer-electronics', [ConsumerElectronicsController::class, 'index'])
        ->name('consumer.electronics');

    Route::get('/technical-services', [TechnicalServicesController::class, 'index'])
        ->name('technical.services');



    Route::get('/technical-services/faq', [
        TechnicalContentController::class,
        'index'
    ])->name('technical.faq');
    Route::get('/technical-services/guidesandtutorials', [GuidesTutorialsController::class, 'index'])->name('technical.guidesandtutor');

    Route::get('/warrantyandservices', [WarrantyController::class, 'index'])->name('warrantyandservices');

    Route::get('/partnership',[AboutController::class,'show'])->name('partnership');
    Route::get('/news',[NewsController::class,'index'])->name('news');
    Route::get('/news/{slug}', [NewsController::class, 'show'])
    ->name('news-detail');
    Route::get('/announcementsandcampaigns',[AnnouncementsController::class,'index'])->name('announcements');

});
