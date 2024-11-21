<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\orderContoller; 




Route::get('/', [PublicController::class, 'welcome']);
//Route::resource('userses', UserController::class);

Route::resource('dashboards',dashboardController::class);
Route::resource('orders', orderContoller::class);

