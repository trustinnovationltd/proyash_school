<?php

namespace App\Http\Requests\Backend\BasicSettings;

use Illuminate\Foundation\Http\FormRequest;

class StoreGeneralSettingRequest extends FormRequest
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
            'institute_id' => 'required|exists:institutes,id',  // Ensure institute exists
            'present_sms' => 'nullable|boolean',  // Allow the field to be null (unchecked checkbox)
            'leave_sms' => 'nullable|boolean',    // Allow the field to be null
            'absent_sms' => 'nullable|boolean',   // Allow the field to be null
            'fee_collection_sms' => 'nullable|boolean',  // Allow the field to be null
            'admission_greeting_sms' => 'nullable|boolean',  // Allow the field to be null
            'birthday_sms' => 'nullable|boolean',  // Allow the field to be null
            'student_id_automatic' => 'nullable|boolean',  // Allow the field to be null
        ];
    }
}
