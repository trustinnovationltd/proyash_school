<?php

namespace App\Http\Requests\Backend\ClassConfigurations;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubjectSetupRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [

            'institute_id' => 'required|exists:institutes,id',
            'medium_id' => 'required|exists:mediums,id',
            'class_id' => 'required|exists:classes,id',
            'department_id' => 'required|exists:departments,id',
            'subject_id' => 'required|exists:subjects,id',
            'subject_type' => 'required',
            'serial' => 'nullable|integer|min:1',


        ];
    }
    public function messages(): array
    {
        return [

            'institute_id.required' => 'The institute is required.',
            'institute_id.exists' => 'The selected institute is invalid.',
            'medium_id.required' => 'The medium is required.',
            'medium_id.exists' => 'The selected medium is invalid.',
            'class_id.required' => 'The class is required.',
            'class_id.exists' => 'The selected class is invalid.',
            'department_id.required' => 'The department is required.',
            'department_id.exists' => 'The selected department is invalid.',
            'subject_id.required' => 'The subject is required.',
            'subject_id.exists' => 'The selected subject is invalid.',
            'subject_type.required' => 'The subject type is required.',
            'subject_type.in' => 'The selected subject type must be one of: mandatory, optional, compulsory, combined, or 4th subject.',
            'serial.required' => 'The serial is required.',
            'serial.integer' => 'The serial must be an integer.',
            'serial.min' => 'The serial must be at least 1.',
            'status.required' => 'The status is required.',
            'status.boolean' => 'The status must be true or false.',
            'created_by.required' => 'The creator information is required.',
            'created_by.exists' => 'The selected creator is invalid.',
            'updated_by.exists' => 'The selected updater is invalid.',
            'deleted_by.exists' => 'The selected deleter is invalid.',

        ];
    }
}
