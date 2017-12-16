<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
          "id" => "required|numeric|exists:users,id",
          "avatar" => "image",
          "name" => "required|min:1|max:191",
          "fb_id" => "min:1|max:191",
          "website" => "max:191",
          "phone" => "required|min:1|max:191",
          "gender" => "required",
          "group" => "required",
          "birth" => "required|date",
          "address" => "max:65535",
          "role" => "array",
          "description" => "max:512",
          "fb_page" => "max:512"
      ];
    }
}
