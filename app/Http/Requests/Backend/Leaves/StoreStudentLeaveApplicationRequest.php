<?php

namespace App\Http\Requests\Backend\Leaves;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentLeaveApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Adjust authorization logic as needed
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'institute_id' => 'required|exists:institutes,id',
            'academic_year_id' => 'required|exists:academic_years,id',
            'medium_id' => 'required|exists:mediums,id',
            'shift_id' => 'nullable|exists:shifts,id', // Correct nullable exists
            'class_id' => 'required|exists:classes,id',
            'department_id' => 'nullable|exists:departments,id', // Correct nullable exists
            'section_setup_id' => 'nullable|exists:section_setups,id', // Correct nullable exists
            'student_id' => 'required|exists:students,id',
            'leave_type' => 'required|string|max:255',
            'leave_application_date' => 'required|date',
            'leave_from' => 'required|date|after_or_equal:leave_application_date',
            'leave_to' => 'required|date|after_or_equal:leave_from',
            'leave_reason' => 'required|string|max:1000',
            'emergency_contact_number' => 'required|string|max:15',
            'approved_date_from' => 'nullable|date|after_or_equal:leave_from',
            'approved_date_to' => 'nullable|date|after_or_equal:approved_date_from', // Ensuring consistency with approved_date_from
            'approved_by' => 'nullable|exists:employees,id',
            'status' => 'required|string|max:15', // Assuming status is a boolean-like integer
            'created_by' => 'nullable|exists:users,id',
            'updated_by' => 'nullable|exists:users,id',
            'deleted_by' => 'nullable|exists:users,id',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'institute_id.required' => 'The institute is required.',
            'academic_year_id.required' => 'The academic year is required.',
            'medium_id.required' => 'The medium is required.',
            'class_id.required' => 'The class is required.',
            'student_id.required' => 'The student is required.',
            'leave_type.required' => 'The leave type is required.',
            'leave_application_date.required' => 'The leave application date is required.',
            'leave_from.required' => 'The leave start date is required.',
            'leave_to.required' => 'The leave end date is required.',
            'leave_reason.required' => 'The leave reason is required.',
            'emergency_contact_number.required' => 'The emergency contact number is required.',
            'status.required' => 'The leave status is required.',
            'approved_date_to.after_or_equal' => 'The approved end date must be after or equal to the approved start date.',
            'approved_date_from.after_or_equal' => 'The approved start date must be after or equal to the leave start date.',
        ];
    }
}
