<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FutureController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'indexFrontEnd']);
Route::get('/client', [ClientController::class, 'indexFrontend']);
Route::get('/product', [ProductController::class, 'indexFrontend']);
Route::get('/gallery', [GalleryController::class, 'indexFrontend']);
Route::get('/future-plan', [FutureController::class, 'indexFrontend']);
Route::get('/article', [ArticleController::class, 'index']);
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/service', [ServiceController::class, 'index']);
// ======================== Admin Routes ========================
Route::prefix('backend')->group(function () {

    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::middleware(['auth'])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        /*
        ============================
        ADMIN ONLY
        ============================
        */

        Route::middleware('role:admin')->group(function () {

            // Home
            Route::get('/home', [HomeController::class, 'index'])->name('home.index');
            Route::post('/home/hero', [HomeController::class, 'updateHero'])->name('home.hero');
            Route::post('/home/weare', [HomeController::class, 'updateWeAre'])->name('home.weare');
            Route::post('/home/etocia', [HomeController::class, 'updateEtocia'])->name('home.etocia');
            Route::post('/home/contact', [HomeController::class, 'updateContact'])->name('home.contact');

            // Client
            Route::get('/client', [ClientController::class, 'index']);
            Route::post('/client/banner', [ClientController::class, 'updateBanner'])->name('client.banner');
            Route::post('/client/addproject', [ClientController::class, 'addProject'])->name('client.addproject');
            Route::delete('/client/delete/{id}', [ClientController::class, 'deleteProject'])->name('client.deleteproject');

            // Product
            Route::get('/product', [ProductController::class, 'index']);
            Route::post('/product/add', [ProductController::class, 'addProduct'])->name('product.add');
            Route::post('/product/caption', [ProductController::class, 'updateCaption'])->name('product.caption');
            Route::delete('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

            // Gallery
            Route::get('/gallery', [GalleryController::class, 'index']);
            Route::post('/gallery/add', [GalleryController::class, 'addImage'])->name('gallery.add');
            Route::delete('/gallery/delete/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');

            // Future
            Route::get('/future', [FutureController::class, 'index']);
            Route::post('/future/add', [FutureController::class, 'addFuture'])->name('future.add');
            Route::delete('/future/delete/{id}', [FutureController::class, 'delete'])->name('future.delete');

            // General
            Route::get('/general', [GeneralController::class, 'index']);
            Route::post('/general/general', [GeneralController::class, 'updateGeneral'])->name('general.general');
            Route::post('/general/featured', [GeneralController::class, 'updateFeatured'])->name('general.featured');
            Route::post('/general/social', [GeneralController::class, 'updateSocial'])->name('general.social');

            // Service
            Route::get('/service', [ServiceController::class, 'create'])->name('service.create');
            Route::post('/service/update-service', [ServiceController::class, 'updateService'])->name('service.updateService');
            Route::post('/service/add', [ServiceController::class, 'addService'])->name('service.addService');
            Route::delete('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');

            // User management
            Route::get('/users', [UserController::class, 'index']);
            Route::post('/users', [UserController::class, 'store'])->name('users.store');
            Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
            Route::post('/users/{id}/password', [UserController::class, 'updatePassword'])->name('users.updatePassword');
        });

        /*
        ============================
        ARTIKEL (ADMIN + USER)
        ============================
        */

        Route::get('/article', [ArticleController::class, 'create'])->name('articles.create');
        Route::post('/article/create', [ArticleController::class, 'store'])->name('articles.store');
        Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');
        Route::post('/article/update/{id}', [ArticleController::class, 'update'])->name('articles.update');
        Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
        Route::get('/welcome', function () {
            return view('backend.welcome');
        })->middleware('auth');
        Route::get('/setting', [SettingController::class, 'index'])->name('setting');
        Route::post('/setting/update', [SettingController::class, 'updateAccount'])->name('setting.update');
    });
});