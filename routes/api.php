<?php

use App\Http\Controllers\OperationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/operations', [OperationController::class, 'create']);
