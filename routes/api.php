<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('accounts', \Modules\Accounts\Http\Controllers\AccountController::class);
