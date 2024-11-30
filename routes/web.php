<?php

use Illuminate\Support\Facades\Route;

//------------------------------------------------------------------------------------------------------------------------------------------

                        //normal controllers
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\orderContoller; 
use App\Http\Controllers\purchasingController;
use App\Http\Controllers\routeOrderController;
use App\Http\Controllers\salesController;
use App\Http\Controllers\warehouseController;
use App\Http\Controllers\customerController;

//------------------------------------------------------------------------------------------------------------------------------------------

                        //api controllers

use App\Http\Controllers\customerApiController;
use App\Http\Controllers\orderApiController;
use App\Http\Controllers\purchasingApiController;
use App\Http\Controllers\routeOrderApiController;
use App\Http\Controllers\salesApiController;
use App\Http\Controllers\warehouseApiController;

//------------------------------------------------------------------------------------------------------------------------------------------

//------------------------------------------------------------Routes -----------------------------------------------------------------------

Route::get('/', [PublicController::class, 'welcome']);

//------------------------------------------------------------------------------------------------------------------------------------------

                        //routes ordinary                

Route::resource('customers', customerController::class);
Route::resource('dashboards',dashboardController::class);
Route::resource('orders', orderContoller::class);
Route::resource('users', UserController::class);;
Route::resource('purchasings', purchasingController::class);
Route::resource('saleses', salesController::class);
Route::resource('warehouses', warehouseController::class);


//-----------------------------------------------------------------------------------------------------------------------------------------

                        //routes api controllers 

//customer -----------------------------------------------------------
Route::get('/api/customers',[customerApiController::class, 'Index']);
Route::get('/api/customer/{id}',[customerApiController::class, 'show']);

//order --------------------------------------------------------------

Route::get('/api/orders',[orderApiController::class, 'Index']);
Route::get('/api/orders/{id}',[orderApiController::class, 'show']);

//purchasing ----------------------------------------------------------

Route::get('/api/purchasings',[purchasingApiController::class, 'Index']);
Route::get('/api/purchasing/{id}',[purchasingApiController::class, 'show']);

//route order ----------------------------------------------------------

Route::get('/api/route',[routeOrderApiController::class, 'Index']);
Route::get('/api/routes/{id}',[routeOrderApiController::class, 'show']);

//warehouse -------------------------------------------------------------

Route::get('/api/warehouses',[warehouseApiController::class, 'Index']);
Route::get('/api/warehouse/{id}',[warehouseApiController::class, 'show']);

