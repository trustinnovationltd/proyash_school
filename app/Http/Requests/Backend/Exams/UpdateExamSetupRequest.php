<?php

namespace App\Http\Requests\Backend\Exams;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExamSetupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Allow access to all users for now. You can customize this based on your authorization logic.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        // Get the ID from the route parameter (this is useful for ignoring the unique validation on the current resource)
        // $examSetupId = $this->route('exam_setup');

        return [
            'institute_id' => 'required|exists:institutes,id',
            'academic_year_id' => 'required|exists:academic_years,id',
            'medium_id' => 'required|exists:mediums,id',
            'shift_id' => 'required|exists:shifts,id',
            'class_id' => 'required|exists:classes,id',
            'exam_type_id' => 'required|exists:exam_types,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'nullable|boolean',
        ];
    }

    /**
     * Get the custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'institute_id.required' => 'Institute is required.',
            'academic_year_id.required' => 'Academic Year is required.',
            'medium_id.required' => 'Medium is required.',
            'shift_id.required' => 'Shift is required.',
            'class_id.required' => 'Class is required.',
            'exam_type_id.required' => 'Exam Type is required.',
            'start_date.required' => 'Start Date is required.',
            'end_date.required' => 'End Date is required.',
            'end_date.after_or_equal' => 'End Date must be after or equal to Start Date.',
        ];
    }

    /**
     * Configure the error bag for this request.
     *
     * @return string
     */
    public function errorBag(): string
    {
        return 'exam_setup';
    }
}
