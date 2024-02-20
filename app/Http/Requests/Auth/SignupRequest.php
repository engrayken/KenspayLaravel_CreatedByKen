<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;

class SignupRequest extends FormRequest
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
            //
            "name" => ["required", "regex:/^[a-zA-Z]{1}[a-zA-Z'-_]+/", "max:50"],
            "email" => ["required", "email", "max:200", "unique:p_users,email", "unique:users,email"],
            "phone" => ["required", "max:20","unique:p_users,phone", "unique:users,phone"],
            "password" => ["required",'regex:/[!@#$%^&*(),.?":{}|<>]/',"min:8", "max:32"],
            // "confirm_password" => ["required", "same:password"]
        ];

//             [
//         'name'=>['required'=>'Full name can not be empty',
//         'max'=>'Full Name can not be more than 15'],
//         'email'=>['required'=>'Email can not be empty',
//         'unique'=>'Email address already Exist'],
//         'phone'=>['required'=>'Phone Number can not be empty',
//         'numeric'=>'Phone number must be Numeric',
//         'unique'=>'Phone number already exist'],
//         'password'=>['password'=>'password must not be empty']

// ];
    }

        public function messages()
    {
        return [
            'password.regex' => 'The password must contain at least one symbol (!@#$%^&*(),.?":{}|<>).',
        ];
    }
}
