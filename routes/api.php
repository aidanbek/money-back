<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('accounts', \Modules\Accounts\Http\Controllers\AccountController::class);
Route::apiResource('transactions', \Modules\Transactions\Http\Controllers\TransactionController::class);
Route::get('banks', [\Modules\Banks\Http\Controllers\BankController::class, 'index']);
