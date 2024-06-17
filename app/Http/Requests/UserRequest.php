<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => [
                'name' => ['required', 'min:3', 'max:255', 'string'],
                'email' => [
                    'required',
                    'email',
                    Rule::unique('tb_user', 'email')
                ],
                'password' => ['required', 'min:6']
            ]
        ];
    }
}
