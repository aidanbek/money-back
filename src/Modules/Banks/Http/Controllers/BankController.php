<?php

declare(strict_types=1);

namespace Modules\Banks\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Modules\Banks\Models\Bank;

class BankController
{
    public function index(): JsonResponse
    {
        return response()->json(Bank::orderBy('name')->get());
    }
}
