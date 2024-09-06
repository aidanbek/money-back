<?php

declare(strict_types=1);

namespace Modules\Transactions\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\Transactions\Enums\TransactionType;

class StoreTransactionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => ['required', 'int', Rule::enum(TransactionType::class)],
            'account_id' => ['required', 'integer'],
            'amount' => ['required', 'numeric', 'gt:0'],
            'comment' => ['string'],
        ];
    }
}
