<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseUpdateRequest extends FormRequest
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
            "id" => "required|numeric|exists:courses,id",
            "course_type_id" => "required|numeric|exists:course_types,id",
            "avatar" => "image",
            // "slide" => "",
            "name" => "required|min:1|max:255",
            "old_price" => "numeric",
            "new_price" => "numeric",
            "new_price_only" => "boolean",
            "sale" => "numeric",
            "gift" => "max:511",
            "opening" => "date",
            "teachers" => "required|array",
            // "current_student_total" => "numeric",
            // "student_total" => "numeric",
            // "lesson_total" => "numeric",
            // "hour_total" => "numeric",
            "day_in_week" => "max:255",
            // "time" => "max:255",
            "time_from" => "max:255",
            "time_to" => "max:255",
            // "session_total" => "numeric",
            "slideVideoLinks" => "array",
            "slideImageUploads" => "array",
            "description" => "required|max:511",
            "content" => "required",
            "publish" => "boolean"
        ];
    }
}
