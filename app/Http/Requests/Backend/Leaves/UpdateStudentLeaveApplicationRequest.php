<?php

namespace App\Http\Requests\Backend\Leaves;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentLeaveApplicationRequest extends FormRequest
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
            'shift_id' => 'required|exists:shifts,id',
            'class_id' => 'required|exists:classes,id',
            'department_id' => 'nullable|exists:departments,id',
            'section_id' => 'required|exists:sections,id',
            'student_id' => 'required|exists:students,id',
            'leave_type' => 'required|string|max:255',
            'leave_application_date' => 'required|date',
            'leave_from' => 'required|date|after_or_equal:leave_application_date',
            'leave_to' => 'required|date|after_or_equal:leave_from',
            'leave_reason' => 'required|string|max:1000',
            'emergency_contact_number' => 'required|string|max:15',
            'approved_date_from' => 'nullable|date',
            'approved_date_to' => 'nullable|date|after_or_equal:approved_date_from',
            'approved_by' => 'nullable|exists:employees,id',
            'status' => 'nullable|string|max:255',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'institute_id.required' => 'The institute is required.',
            'institute_id.exists' => 'The selected institute is invalid.',
            'academic_year_id.required' => 'The academic year is required.',
            'academic_year_id.exists' => 'The selected academic year is invalid.',
            'medium_id.required' => 'The medium is required.',
            'medium_id.exists' => 'The selected medium is invalid.',
            'shift_id.required' => 'The shift is required.',
            'shift_id.exists' => 'The selected shift is invalid.',
            'class_id.required' => 'The class is required.',
            'class_id.exists' => 'The selected class is invalid.',
            'department_id.exists' => 'The selected department is invalid.',
            'section_id.required' => 'The section is required.',
            'section_id.exists' => 'The selected section is invalid.',
            'student_id.required' => 'The student is required.',
            'student_id.exists' => 'The selected student is invalid.',
            'leave_type.required' => 'The leave type is required.',
            'leave_application_date.required' => 'The leave application date is required.',
            'leave_from.required' => 'The leave start date is required.',
            'leave_from.after_or_equal' => 'The leave start date must be equal to or after the application date.',
            'leave_to.required' => 'The leave end date is required.',
            'leave_to.after_or_equal' => 'The leave end date must be equal to or after the leave start date.',
            'leave_reason.required' => 'The leave reason is required.',
            'emergency_contact_number.required' => 'The emergency contact number is required.',
            'approved_date_from.date' => 'The approved start date must be a valid date.',
            'approved_date_to.date' => 'The approved end date must be a valid date.',
            'approved_date_to.after_or_equal' => 'The approved end date must be equal to or after the approved start date.',
            'approved_by.exists' => 'The selected approver is invalid.',
            'status.in' => 'The status must be one of the following: Active, Inactive.',
        ];
    }
}
