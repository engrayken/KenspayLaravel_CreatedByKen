<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        "name" => ["required", "regex:/^[a-zA-Z]{1}[a-zA-Z'-_]+/", "max:50"],
        "bName" => ["required", "regex:/^[a-zA-Z]/", "max:20", "min:4"],
        "type" => ["in:nin,bvn"],
        "nin" => ["required_if:type,nin"],
        "bvn" => ["required_if:type,bvn"],
    ];
    }

            public function messages()
    {
        return [
            'bName.alpha' => 'The business name field must only contain letters.',
        ];
    }
}
