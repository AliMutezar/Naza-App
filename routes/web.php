<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PorfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::controller(ContactController::class)->group(function() {
    Route::get('/contact', 'index')->name('contact');
});

Route::controller(ServicesController::class)->group(function() {
    Route::get('/services', 'index')->name('services');
    Route::get('/services-details', 'serviceDetails')->name('service.details');
});

Route::controller(PorfolioController::class)->group(function() {
    Route::get('/case-studies', 'index')->name('porfolio');
    Route::get('/case-studies-details', 'portfolioDetails')->name('porfolio.details');
});

Route::controller(CareerController::class)->group(function() {
    Route::get('/career', 'index')->name('career');
    Route::get('/career-details', 'carrerDetails')->name('career.details');
});

Route::post('/customer-post', [CustomerController::class, 'store'])->name('customer.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'verified'])->group(function() {
    Route::controller(DashboardController::class)->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    Route::controller(ServicesController::class)->group(function() {
        Route::get('/services/data', 'getServicesData')->name('services.data');
        Route::get('/services/create', 'create')->name('services.create');
        Route::get('/services/edit/{id}', 'edit')->name('services.edit');
        Route::post('/services/post', 'store')->name('services.store');
        Route::put('/services/update/{id}', 'update')->name('services.update');
    });

    Route::controller(CustomerController::class)->group(function() {
        Route::get('/customer/data', 'index')->name('customer.data');
        // Route::post('/customer/post', 'store')->name('customer.store');
        Route::get('/customer/edit/{id}', 'edit')->name('customer.edit');
        Route::put('/customer/update/{id}', 'update')->name('customer.update');
    });
});

require __DIR__.'/auth.php';
