<?php

namespace App\Http\Requests\Backend\Students;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // You can implement authorization if needed.
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name_bn' => 'required',
            'name_en' => 'required',
            'admission_date' => 'required|date',
            'birth_date' => 'required|date',
            'nationality' => 'required',
            'religion' => 'required',
            // 'admission_year' => 'required',
            // 'grade_applied_for' => 'required',
            'blood_group' => 'nullable|string|max:10',
            'status' => 'required|in:1,0', // Assuming 1 for active and 0 for inactive

            'father_name_bn' => 'required',
            'father_name_en' => 'required',
            'father_mobile' => 'required',
            'father_occupation' => 'required',
            // 'father_organization_name' => 'required',
            'father_basic_income' => 'numeric',
            'father_gross_income' => 'numeric',

            'mother_name_bn' => 'required',
            'mother_name_en' => 'required',
            'mother_mobile' => 'required',
            'mother_occupation' => 'required',
            // 'mother_organization_name' => 'required',
            'mother_basic_income' => 'numeric',
            'mother_gross_income' => 'numeric',

            'present_village' => 'required',
            'present_post_office' => 'required',
            'present_upazila' => 'required',
            'present_district' => 'required',

            'permanent_village' => 'required',
            'permanent_post_office' => 'required',
            'permanent_upazila' => 'required',
            'permanent_district' => 'required',

            'guardian_signature' => 'image|mimes:jpg,jpeg,png|max:2048',
            'student_image' => 'image|mimes:jpg,jpeg,png|max:2048',
            'student_signature' => 'image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [];
    }
}
