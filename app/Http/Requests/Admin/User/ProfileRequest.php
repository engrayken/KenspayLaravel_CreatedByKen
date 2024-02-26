<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            // "email" => ["required", "email", "max:200", "unique:p_users,email"],
            // "phone" => ["required", "max:12","min:11"],
            "bName" => ["required"],
            "bvn" => ["max:12","min:0"],
            "nin" => ["max:12","min:0"],
            "bankName" => ["max:30","min:0"],
            "customerName" => ["max:30","min:0"],
            "customerNumber" => ["max:30","min:0"],
            "reference" => ["required"],
            "website" => ["required"],

        ];
    }
}
