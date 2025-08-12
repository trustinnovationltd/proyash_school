<?php

namespace App\Http\Requests\Backend\Employees;

use Illuminate\Foundation\Http\FormRequest;

class StoreSectionRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'order' => 'required|integer|min:0',
            'status' => 'required|boolean',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'institute_id.exists' => 'The selected institute is invalid.',
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'status.required' => 'The status field is required.',
            'status.boolean' => 'The status must be true or false.',
        ];
    }
}
