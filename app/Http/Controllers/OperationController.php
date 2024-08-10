<?php

namespace App\Http\Controllers;

use App\Http\Requests\OperationCreateRequest;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function create(OperationCreateRequest $request)
    {
        dd($request->validated());
    }
}
