<?php

namespace App\Http\Requests\Backend\Employees;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Assuming no special authorization is needed for the update
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {

        return [
            'name_english' => 'required|string|max:255',
            'name_bangla' => 'required|string|max:255',
            'nid' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'nullable|email',
            'date_of_birth' => 'required|date',
            'blood_group' => 'nullable|string|max:10',
            'religion' => 'required|string|max:50',
            'gender' => 'required|string|max:10',
            'joining_date' => 'required|date',
            'status' => 'required|boolean',

            // Address
            'present_village' => 'nullable|string|max:255',
            'present_post_office' => 'nullable|string|max:255',
            'present_upazila' => 'nullable|string|max:255',
            'present_district' => 'nullable|string|max:255',
            'permanent_village' => 'nullable|string|max:255',
            'permanent_post_office' => 'nullable|string|max:255',
            'permanent_upazila' => 'nullable|string|max:255',
            'permanent_district' => 'nullable|string|max:255',

            // Education
            'ssc_school' => 'nullable|string|max:255',
            'ssc_board' => 'nullable|string|max:255',
            'ssc_year' => 'nullable|numeric',
            'ssc_result' => 'nullable|string|max:50',
            'hsc_college' => 'nullable|string|max:255',
            'hsc_board' => 'nullable|string|max:255',
            'hsc_year' => 'nullable|numeric',
            'hsc_result' => 'nullable|string|max:50',
            'diploma_institute' => 'nullable|string|max:255',
            'diploma_subject' => 'nullable|string|max:255',
            'diploma_year' => 'nullable|numeric',
            'diploma_result' => 'nullable|string|max:50',
            'bachelor_university' => 'nullable|string|max:255',
            'bachelor_department' => 'nullable|string|max:255',
            'bachelor_year' => 'nullable|numeric',
            'bachelor_result' => 'nullable|string|max:50',
            'masters_university' => 'nullable|string|max:255',
            'masters_department' => 'nullable|string|max:255',
            'masters_year' => 'nullable|numeric',
            'masters_result' => 'nullable|string|max:50',
            'other_qualification' => 'nullable|string',

            // Experience
            'year_of_experience' => 'nullable|numeric',
            'experience_information' => 'nullable|string',

            // Documents
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'institute_id.required' => 'Institute is required.',
            'department_id.required' => 'Department is required.',
            'medium_id.required' => 'Medium is required.',
            'shift_id.required' => 'Shift is required.',
            'designation_id.required' => 'Designation is required.',
            'teachers_id.string' => 'Teacher ID must be a valid string.', // Custom message for invalid teacher ID type
            'teachers_id.exists' => 'The selected teacher ID is invalid.', // Custom message for invalid teacher ID
            'teachers_id.required' => 'Teacher ID is required.',
            'rfid.unique' => 'RFID must be unique.',
            'name_english.required' => 'Name in English is required.',
            'phone.required' => 'Phone number is required.',
            'email.required' => 'Email is required.',
            'email.unique' => 'Email must be unique.',
            'date_of_birth.required' => 'Date of birth is required.',
            'permanent_address.required' => 'Permanent address is required.',
            'present_address.required' => 'Present address is required.',
            'joining_date.required' => 'Joining date is required.',
            'image.image' => 'Image must be a valid image file.',
            'image.max' => 'Image size should not exceed 2MB.',
            'signature.image' => 'Signature must be a valid image file.',
            'signature.max' => 'Signature size should not exceed 1MB.',
            'status.boolean' => 'Status must be a boolean value.',
        ];
    }
}
