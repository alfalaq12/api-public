<?php

use App\Http\Controllers\EncryptionController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\OfficeController;
use App\Http\Controllers\Api\EmployeeController;

Route::get('/customers/encrypt', [CustomerController::class, 'getEncryptedCustomers']);
Route::post('/customers/decrypt', [CustomerController::class, 'decryptCustomerData']);

Route::get('/offices/encrypt', [OfficeController::class, 'getEncryptedOffices']);
Route::post('/offices/decrypt', [OfficeController::class, 'decryptOfficesData']);

Route::get('/employees/encrypt', [EmployeeController::class, 'getEncryptedEmployees']);
Route::post('/employees/decrypt', [EmployeeController::class, 'decryptEmployeesData']);

Route::get('/encrypt-data', [EncryptionController::class, 'encryptData']);
Route::get('/decrypt-data', [EncryptionController::class, 'decryptData']);