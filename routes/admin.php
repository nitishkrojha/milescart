<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\DashboardController;



Route::prefix('admin')->name('admin.')->group(function () {

    Route::controller(AuthController::class)->group(function () {
        Route::get('login', 'showLoginForm')->name('login');
        Route::post('login', 'login')->name('login-auth');
        Route::get('logout', 'logout')->name('logout');
        Route::get('forgot', 'authReset')->name('forgotPassword');
        Route::post('password-reset', 'passwordReset')->name('password-reset');
        Route::match(['get', 'post'], 'reset/{key}', 'authPasswordReset', ['authPasswordReset'])->name('auth-password-reset');
    });

    Route::group(['middleware' => ['auth:admin']], function () {
        // Dashboard 
        Route::get("/", [DashboardController::class, 'index'])->name('dashboard');
        Route::get("dashboard", [DashboardController::class, 'index'])->name('dashboard');
        // Customers
        Route::get('customers', [CustomerController::class, 'index'])->name('customers');
        Route::get('customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
        Route::patch('customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
        Route::delete('customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
        // Events
        Route::get('events', [EventController::class, 'index'])->name('events');
        Route::get('events/create', [EventController::class, 'create'])->name('events.create');
        Route::post('events', [EventController::class, 'store'])->name('events.store');
        Route::get('events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
        Route::patch('events/{event}', [EventController::class, 'update'])->name('events.update');
        Route::delete('events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

        // Brands
        Route::get('brands', [BrandController::class, 'index'])->name('brands');
        Route::get('brands/create', [BrandController::class, 'create'])->name('brands.create');
        Route::post('brands', [BrandController::class, 'store'])->name('brands.store');
        Route::get('brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit');
        Route::patch('brands/{brand}', [BrandController::class, 'update'])->name('brands.update');
        Route::delete('brands/{brand}', [BrandController::class, 'destroy'])->name('brands.destroy');

        // Profile
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    });

   
});
