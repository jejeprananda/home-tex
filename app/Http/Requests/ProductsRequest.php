<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'name' => [
                'name' => ['required', 'min:3', 'max:255', 'string'],
                'category' => ['required'],
                'price' => ['required'],
                'discount' => [],
                'img' => ['required', 'string'],
                'stock' => ['required', 'integer'],
                'description' => ['required'],
            ]
        ];
    }
}
