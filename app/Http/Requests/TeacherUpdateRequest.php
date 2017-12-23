<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherUpdateRequest extends FormRequest
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
            "id" => "required|numeric|exists:teachers,id",
            "avatar" => "image",
            "name" => "required|min:1|max:255",
            // "email" => "max:255|email",
            "facebook" => "max:255",
            "phone" => "max:255",
            "description" => "max:511",
            "content" => "max:65535"
        ];
    }
}
