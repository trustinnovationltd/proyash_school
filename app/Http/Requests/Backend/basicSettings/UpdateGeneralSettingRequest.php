<?php

namespace App\Http\Requests\Backend\BasicSettings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGeneralSettingRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'present_sms' => 'required|boolean',
            'leave_sms' => 'required|boolean',
            'absent_sms' => 'required|boolean',
            'fee_collection_sms' => 'required|boolean',
            'admission_greeting_sms' => 'required|boolean',
            'birthday_sms' => 'required|boolean',
            'student_id_automatic' => 'required|boolean',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'present_sms.required' => 'The Present SMS field is required.',
            'leave_sms.required' => 'The Leave SMS field is required.',
            'absent_sms.required' => 'The Absent SMS field is required.',
            'fee_collection_sms.required' => 'The Fee Collection SMS field is required.',
            'admission_greeting_sms.required' => 'The Admission Greeting SMS field is required.',
            'birthday_sms.required' => 'The Birthday SMS field is required.',
            'student_id_automatic.required' => 'The Student ID Automatic field is required.',
        ];
    }
}
