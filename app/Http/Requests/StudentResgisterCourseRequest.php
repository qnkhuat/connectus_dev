<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentResgisterCourseRequest extends FormRequest
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
            "course" => "required|numeric|exists:courses,id",
            "branch" => "required|numeric|exists:course_branchs,id",
            "name" => "max:255",
            "email" => "email|max:255",
            "phone" => "max:512",
            "message" => "max:512",
            "know" => "max:255"
        ];
    }
}
