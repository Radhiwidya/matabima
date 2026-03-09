<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FutureController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'indexFrontEnd']);
Route::get('/client', [ClientController::class,'indexFrontend']);
Route::get('/product', [ProductController::class,'indexFrontend']);
Route::get('/gallery', [GalleryController::class,'indexFrontend']);
Route::get('/future-plan', [FutureController::class,'indexFrontend']);
Route::get('/service', function () {
    return view('frontend.service');
});
Route::get('/article', function () {
    return view('frontend.article');
});
// ===================== Admin Routes =====================
Route::prefix('backend')->group(function () {
    Route::get('/', function () {
        return view('backend.login');
    });
    // ========================Home===========================
    Route::get('/home', [HomeController::class,'index'])->name('home.index');
    Route::post('/home/hero', [HomeController::class,'updateHero'])->name('home.hero');
    Route::post('/home/weare', [HomeController::class,'updateWeAre'])->name('home.weare');
    Route::post('/home/etocia', [HomeController::class,'updateEtocia'])->name('home.etocia');
    Route::post('/home/contact', [HomeController::class,'updateContact'])->name('home.contact');
    // =======================Client===========================
    Route::get('/client', [ClientController::class,'index']);
    Route::post('/client/banner', [ClientController::class,'updateBanner'])->name('client.banner');
    Route::post('/client/addproject', [ClientController::class,'addProject'])->name('client.addproject');
    Route::delete('/client/delete/{id}', [ClientController::class,'deleteProject'])->name('client.deleteproject');
    // =======================Product===========================
    Route::get('/product', [ProductController::class,'index']);
    Route::post('/product/add', [ProductController::class,'addProduct'])->name('product.add');
    Route::post('/product/caption', [ProductController::class,'updateCaption'])->name('product.caption');
    Route::delete('/product/delete/{id}', [ProductController::class,'delete'])->name('product.delete');
    // =======================Gallery===========================
    Route::get('/gallery', [GalleryController::class,'index']);
    Route::post('/gallery/add', [GalleryController::class,'addImage'])->name('gallery.add');
    Route::delete('/gallery/delete/{id}', [GalleryController::class,'delete'])->name('gallery.delete');
    // =======================Future===========================
    Route::get('/future', [FutureController::class,'index']);
    Route::post('/future/add', [FutureController::class,'addFuture'])->name('future.add');
    Route::delete('/future/delete/{id}', [FutureController::class,'delete'])->name('future.delete');
    // =======================General===========================
    Route::get('/general', [GeneralController::class,'index']);
    Route::post('/general/general', [GeneralController::class,'updateGeneral'])->name('general.general');
    Route::post('/general/featured', [GeneralController::class,'updateFeatured'])->name('general.featured');
    Route::post('/general/social', [GeneralController::class,'updateSocial'])->name('general.social');
});