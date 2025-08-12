<?php

namespace App\Http\Requests\Backend\ClassConfigurations;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassSetupRequest extends FormRequest
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

            'institute_id' => 'required|exists:institutes,id', // Ensure the institute exists in the database
            'medium_id' => 'required|exists:mediums,id', // Ensure the medium exists in the database
            'class_ids' => 'required|array|min:1', // Must be an array with at least one element
            'class_ids.*' => 'required|exists:classes,id', // Each element in the array must exist in the
        ];
    }
    public function messages(): array
    {
        return [
            'institute_id.required' => 'The institute is required.',
            'institute_id.exists' => 'The selected institute does not exist.',
            'medium_id.required' => 'The medium is required.',
            'medium_id.exists' => 'The selected medium does not exist.',
            'class_ids.required' => 'You must select at least one class.',
            'class_ids.array' => 'Classes should be provided as an array.',
            'class_ids.*.exists' => 'One or more selected classes are invalid.',
        ];
    }
}
