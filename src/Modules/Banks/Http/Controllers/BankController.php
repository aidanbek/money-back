<?php

namespace Modules\Banks\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Banks\Http\Requests\BankCreateRequest;
use Modules\Banks\Http\Requests\BankUpdateRequest;
use Modules\Banks\Services\BankService;

class BankController extends Controller
{
    public function __construct(private BankService $service)
    {
    }

    public function index(): JsonResponse
    {

    }

    public function store(BankCreateRequest $request): JsonResponse
    {
        $data = $request->validated();
        $result = $this->service->create($data);

        return response()->json($result);
    }

    public function show(int $id): JsonResponse
    {
        //
    }

    public function update(BankUpdateRequest $request, int $id): JsonResponse
    {
        //
    }

    public function destroy(int $id): JsonResponse
    {
        //
    }
}
