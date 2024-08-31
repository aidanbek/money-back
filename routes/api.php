<?php

use App\Http\Controllers\OperationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/operations/expense', [OperationController::class, 'createExpense']);

Route::name('payees')->group(function () {
    Route::post('/', [\Modules\Banks\Http\Controllers\BankController::class, 'store']);
    Route::get('/', [\Modules\Banks\Http\Controllers\BankController::class, 'index']);
    Route::get('/{id}', [\Modules\Banks\Http\Controllers\BankController::class, 'show']);
    Route::put('/{id}', [\Modules\Banks\Http\Controllers\BankController::class, 'update']);
    Route::delete('/{id}', [\Modules\Banks\Http\Controllers\BankController::class, 'destroy']);
});
