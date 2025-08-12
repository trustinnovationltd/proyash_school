<?php

namespace App\Http\Requests\Backend\Employees;

use Illuminate\Foundation\Http\FormRequest;

class AssignEmployeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'employee_id' => 'required|exists:employees,id',
            'section_id' => 'required|exists:sections,id',
            'designation_id' => 'required|exists:designations,id',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:0,1,2',
        ];
    }
}
