<?php

namespace App\Http\Requests;

use App\Enums\AccountTypeEnum;
use App\Enums\CategoryTypeEnum;
use DateTimeInterface;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ExpenseOperationCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'account' => ['required', 'array'],
            'account.title' => ['required'],
            'account.type_id' => ['required', Rule::enum(AccountTypeEnum::class)],
            'payee' => ['required', 'array'],
            'payee.title' => ['required'],
            'online' => ['required', 'boolean'],
            'happened_at' => ['required', 'date_format:' . DateTimeInterface::ATOM],
            'products' => ['required', 'array'],
            'products.*.product' => ['required', 'array'],
            'products.*.product.title' => ['required'],
            'products.*.product.code' => ['nullable'],
            'products.*.product.brand' => ['nullable', 'array'],
            'products.*.product.brand.title' => ['required_with:products.*.product.brand', 'string'],
            'products.*.product.measure_unit' => ['required', 'array'],
            'products.*.product.measure_unit.title' => ['required'],
            'products.*.category' => ['required', 'array'],
            'products.*.category.title' => ['required'],
            'products.*.category.type_id' => ['required', Rule::enum(CategoryTypeEnum::class)],
            'products.*.project' => ['nullable'],
            'products.*.project.title' => ['required_with:products.*.project'],
            'products.*.quantity' => ['required'],
            'products.*.price' => ['required'],
        ];
    }
}
