<?php

namespace Modules\Accounts\Http\Controllers;

use App\Helpers\StringHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Modules\Accounts\Http\Requests\StoreAccountRequest;
use Modules\Accounts\Http\Requests\UpdateAccountRequest;
use Modules\Accounts\Models\Account;

class AccountController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Account::orderBy('title')->get());
    }

    public function store(StoreAccountRequest $request): JsonResponse
    {
        $data = array_merge(
            $request->validated(),
            [
                'clean_title' => StringHelper::clearTitle($request->validated('title')),
                'current_balance' => $request->validated('initial_balance'),
                'initial_balance' => $request->validated('initial_balance'),
            ]
        );

        return response()->json(Account::create($data), Response::HTTP_CREATED);
    }

    public function show(Account $account): JsonResponse
    {
        return response()->json($account);
    }

    public function update(UpdateAccountRequest $request, Account $account): JsonResponse
    {
        $account->update($request->validated());

        return response()->json($account);
    }

    public function destroy(Account $account): JsonResponse
    {
        $account->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
