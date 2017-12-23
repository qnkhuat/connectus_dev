<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseBranchCreateRequest extends FormRequest
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
            "course_id" => "required|numeric|exists:courses,id",
            "day_of_week" => "max:255",
            "opening" => "required|date",
            "address_id" => "required|numeric|exists:address,id"
        ];
    }
}
