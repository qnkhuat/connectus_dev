<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPasswordChangingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "old_password" => "required|min:1|max:255",
            "new_password" => "required|min:1|max:255",
            "confirm_password" => "required|min:1|max:255|same:new_password",
        ];
    }
}
