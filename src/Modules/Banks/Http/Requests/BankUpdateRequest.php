<?php

declare(strict_types=1);

namespace Modules\Banks\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
        ];
    }
}
