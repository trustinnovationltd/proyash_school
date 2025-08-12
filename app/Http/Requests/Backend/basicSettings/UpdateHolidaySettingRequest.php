<?php

namespace App\Http\Requests\Backend\BasicSettings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHolidaySettingRequest extends FormRequest
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
            'academic_year_id' => 'required|exists:academic_years,id',  // Ensure academic year exists
            'medium_id' => 'required|exists:mediums,id',  // Ensure medium exists
            'holiday_type' => 'required|string|max:255',  // Holiday type must be a string
            'start_date' => 'required|date',  // Start date must be a valid date
            'end_date' => 'nullable|date|after_or_equal:start_date',  // End date must be valid and after or equal to start date
            'description' => 'nullable|string|max:500',  // Optional description with max length
            'status' => 'required|boolean',  // Status must be a boolean value (1 or 0)
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'institute_id.required' => 'Please select an institute.',
            'academic_year_id.required' => 'Please select an academic year.',
            'medium_id.required' => 'Please select a medium.',
            'holiday_type.required' => 'The holiday type is required.',
            'start_date.required' => 'The start date is required.',
            'start_date.date' => 'The start date must be a valid date.',
            'end_date.date' => 'The end date must be a valid date.',
            'end_date.after_or_equal' => 'The end date must be after or equal to the start date.',
            'status.required' => 'The status is required.',
        ];
    }
}