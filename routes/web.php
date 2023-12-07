<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
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
Route::get('/', function() {
    return Redirect::route('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::controller(ServicesController::class)->group(function() {
    Route::get('/services', 'index')->name('services');
    Route::get('/services-details', 'serviceDetails')->name('service.details');
});

Route::controller(PorfolioController::class)->group(function() {
    Route::get('/porfolio', 'index')->name('porfolio');
    Route::get('/portfolio-details', 'portfolioDetails')->name('porfolio.details');
});

Route::controller(CareerController::class)->group(function() {
    Route::get('/career', 'index')->name('career');
    Route::get('/career-details', 'carrerDetails')->name('career.details');
});



Route::get('/dashboard', function () {
    return view('backoffice_layouts/dashboard-mazer');
    // return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Email validation notice, email must be validated by user
Route::get('/email/verify', function() {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


// Email verificatoin handler, for redirect once the user's email address has been verified, and we can redirect them whereever we wish
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


// Resending verification email
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->SendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

require __DIR__.'/auth.php';
