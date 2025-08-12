<?php

namespace App\Http\Requests\Backend\Leaves;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeLeaveApplicationRequest extends FormRequest
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
            'institute_id' => 'required|exists:institutes,id',
            'employee_id' => 'required|exists:employees,id',
            'designation_id' => 'required|exists:designations,id',
            'employee_name' => 'required|string|max:255',
            'leave_type' => 'required|string|max:255',
            'pay_type' => 'required|string|max:255',
            'leave_application_date' => 'required|date',
            'leave_from' => 'required|date',
            'leave_to' => 'required|date',
            'leave_reason' => 'required|string|max:1000',
            'emergency_contact_number' => 'required|string|max:15',
            'status' => 'nullable|string|in:pending,approved,rejected', // Status can be pending, approved or rejected
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'institute_id.required' => 'Institute is required.',
            'institute_id.exists' => 'The selected institute is invalid.',
            'employee_id.required' => 'Employee is required.',
            'employee_id.exists' => 'The selected employee is invalid.',
            'designation_id.required' => 'Designation is required.',
            'designation_id.exists' => 'The selected designation is invalid.',
            'leave_type.required' => 'Leave type is required.',
            'pay_type.required' => 'Pay type is required.',
            'leave_application_date.required' => 'Leave application date is required.',
            'leave_from.required' => 'Leave start date is required.',
            'leave_to.required' => 'Leave end date is required.',
            'leave_reason.required' => 'Leave reason is required.',
            'emergency_contact_number.required' => 'Emergency contact number is required.',
            'status.in' => 'Status must be one of the following: pending, approved, rejected.',
        ];
    }
}
