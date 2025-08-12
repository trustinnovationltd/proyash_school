<?php

namespace App\Http\Requests\Backend\BasicSettings;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'class_status' => 'nullable|boolean',
            'status' => 'nullable|boolean',
        ];
    }
}
