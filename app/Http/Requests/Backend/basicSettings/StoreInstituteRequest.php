<?php

namespace App\Http\Requests\Backend\BasicSettings;

use Illuminate\Foundation\Http\FormRequest;

class StoreInstituteRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'branch_name' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'eiin_code' => 'required|string|unique:institutes,eiin_code',
            'phone' => 'required|string|max:15|unique:institutes,phone',
            'email' => 'nullable|email|unique:institutes,email',
            'medium_ids' => 'required|array',
            'department_ids' => 'required|array',
            'shift_ids' => 'required|array',
            'class_ids' => 'required|array',
            'exam_type_ids' => 'required|array',
            'weekly_holidays' => 'nullable|array',
            'description' => 'nullable|string',
            'logo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'dashboard_banner_image' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'website' => 'nullable|url',
            'facebook_link' => 'nullable|url',
            'youtube_link' => 'nullable|url',
            'map_link' => 'nullable|url',
            'android_link' => 'nullable|url',
            'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'eiin_code.required' => 'EIIN Code is required.',
            'eiin_code.unique' => 'This EIIN Code is already taken.',
            'phone.unique' => 'This phone is already in use.',
            'email.unique' => 'This email is already in use.',
            'logo.mimes' => 'Logo must be a JPEG, PNG, or JPG image.',
            'logo.max' => 'Logo size must not exceed 2MB.',
            // Add more messages if needed
        ];
    }
}
