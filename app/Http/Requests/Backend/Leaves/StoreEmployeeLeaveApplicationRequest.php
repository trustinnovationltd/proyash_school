<?php

namespace App\Http\Requests\Backend\Leaves;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeLeaveApplicationRequest extends FormRequest
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
            'employee_id' => 'required|exists:employees,id',
            'designation_id' => 'required|exists:designations,id',
            'leave_type' => 'required|string|max:255',
            'pay_type' => 'required|string|max:255',
            'leave_application_date' => 'required|date',
            'leave_from' => 'required|date',
            'leave_to' => 'required|date',
            'leave_reason' => 'required|string|max:1000',
            'emergency_contact_number' => 'required|string|max:15',
            'status' => 'required|string|max:15',
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
            'employee_id.required' => 'The employee is required.',
            'employee_id.exists' => 'The selected employee is invalid.',
            'designation_id.required' => 'The designation is required.',
            'designation_id.exists' => 'The selected designation is invalid.',
            'leave_type.required' => 'The leave type is required.',
            'pay_type.required' => 'The pay type is required.',
            'leave_application_date.required' => 'The leave application date is required.',
            'leave_from.required' => 'The leave start date is required.',
            'leave_to.required' => 'The leave end date is required.',
            'leave_reason.required' => 'The leave reason is required.',
            'emergency_contact_number.required' => 'The emergency contact number is required.',
            'status.required' => 'The leave status is required.',
        ];
    }
}
