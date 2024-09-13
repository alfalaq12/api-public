<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductLineController;
use App\Http\Controllers\ProductController;

Route::get('/dashboard/customers', [CustomerController::class, 'index']);
Route::get('/dashboard/employees', [EmployeeController::class, 'index']);
Route::get('/dashboard/offices', [OfficeController::class, 'index']);
Route::get('/dashboard/orderdetails', [OrderDetailController::class, 'index']);
Route::get('/dashboard/orders', [OrderController::class, 'index']);
Route::get('/dashboard/payments', [PaymentController::class, 'index']);
Route::get('/dashboard/productlines', [ProductLineController::class, 'index']);
Route::get('/dashboard/products', [ProductController::class, 'index']);