<?php

declare(strict_types=1);

namespace Modules\Transactions\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Modules\Accounts\Models\Account;
use Modules\Transactions\Enums\TransactionType;
use Modules\Transactions\Http\Requests\StoreTransactionRequest;
use Modules\Transactions\Models\Transaction;

class TransactionController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Transaction::latest()->get());
    }

    public function store(StoreTransactionRequest $request): JsonResponse
    {
        $transaction = DB::transaction(function () use ($request) {
            $data = $request->validated();
            $type = TransactionType::from($data['type']);

            $amount = (float) $data['amount'];
            $account = Account::findOrFail($data['account_id']);

            switch ($type) {
                case TransactionType::EXPENSE:
                    $account->current_balance -= $amount;
                    $account->save();
                    break;
                case TransactionType::INCOME:
                    $account->current_balance += $amount;
                    $account->save();
                    break;
                case TransactionType::TRANSFER:
                    throw new \Exception('To be implemented');
            }

            return Transaction::create($data);
        });


        return response()->json($transaction, Response::HTTP_CREATED);
    }
}
