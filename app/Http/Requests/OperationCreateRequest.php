<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperationCreateRequest extends FormRequest
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
            'payee' => ['required', 'array'],
            'payee.title' => ['required'],
            'total' => ['required'],
            'online' => ['required', 'boolean'],
            'happened_at' => ['required'],
            'products' => ['required', 'array'],
            'products.*.product' => ['required', 'array'],
            'products.*.product.title' => ['required'],
            'products.*.product.code' => ['nullable'],
            'products.*.product.brand' => ['nullable'],
            'products.*.product.measure_unit' => ['required', 'array'],
            'products.*.product.measure_unit.title' => ['required'],
            'products.*.category' => ['required', 'array'],
            'products.*.category.title' => ['required'],
            'products.*.project' => ['nullable'],
            'products.*.project.title' => ['required_with:products.*.project'],
            'products.*.quantity' => ['required'],
            'products.*.price' => ['required'],
        ];
    }
}