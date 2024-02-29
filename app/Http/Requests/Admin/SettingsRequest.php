<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
            "siteName" => ["required"],
            "tawkId" => ["required"],
            "email" => ["required"],
            "phone" => ["required"],
            "ehost" => ["required"],
            "monthlyCharge" => ["required"],
            "bankFee" => ["required"],
            "androidApp" => ["required"],
            "iosApp" => ["required"],
            "facebook" => ["required"],
            "twitter" => ["required"],
            "youtube" => ["required"],
            "instagram" => ["required"],
            "address" => ["required"],

        ];
    }
}
