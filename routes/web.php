<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\OrderController; 
use App\Http\Controllers\purchasingController;
use App\Http\Controllers\routeOrderController;
use App\Http\Controllers\salesController;
use App\Http\Controllers\warehouseController;
use App\Http\Controllers\customerController;




use App\Http\Controllers\customerApiController;
use App\Http\Controllers\orderApiController;
use App\Http\Controllers\purchasingApiController;
use App\Http\Controllers\routeOrderApiController;
use App\Http\Controllers\salesApiController;
use App\Http\Controllers\warehouseApiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    
});

    Route::resource('customers', customerController::class);
    Route::resource('dashboards',dashboardController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('users', UserController::class);
    Route::resource('purchasings', purchasingController::class);
    Route::resource('sales', salesController::class);
    Route::resource('warehouses', warehouseController::class);
    Route::resource('routeOrder', routeOrderController::class);

    Route::get('/api/routeorders', [RouteOrderApiController::class, 'index']);
    Route::get('/api/routeorders/{id}', [RouteOrderApiController::class, 'show']);

require __DIR__.'/auth.php';
