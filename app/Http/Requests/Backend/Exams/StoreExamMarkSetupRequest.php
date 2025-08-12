<?php

namespace App\Http\Requests\Backend\Exams;

use Illuminate\Foundation\Http\FormRequest;

class StoreExamMarkSetupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // If you want to restrict access to certain users, you can check permissions here.
        return true; // Allow access to all users.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'institute_id' => 'required|exists:institutes,id',
            'academic_year_id' => 'required|exists:academic_years,id',
            'medium_id' => 'required|exists:mediums,id',
            'shift_id' => 'required|exists:shifts,id',
            'class_id' => 'required|exists:classes,id',
            'department_id' => 'required|exists:departments,id',
            'subject_id' => 'required|exists:subjects,id',
            'written_exam_mark' => 'required|numeric|min:0',
            'written_exam_pass_mark' => 'required|numeric|min:0',
            'mcq_exam_mark' => 'required|numeric|min:0',
            'mcq_exam_pass_mark' => 'required|numeric|min:0',
            'practical_mark' => 'required|numeric|min:0',
            'class_test_mark' => 'required|numeric|min:0',
            'monthly_test_mark' => 'required|numeric|min:0',
            'total_mark' => 'required|numeric|min:0',
            'converted_in' => 'required|numeric|min:0',
            'total_pass_mark' => 'required|numeric|min:0',
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
            'department_id.required' => 'Department is required.',
            'subject_id.required' => 'Subject is required.',
            'written_exam_mark.required' => 'Written Exam Mark is required.',
            'written_exam_pass_mark.required' => 'Written Exam Pass Mark is required.',
            'mcq_exam_mark.required' => 'MCQ Exam Mark is required.',
            'mcq_exam_pass_mark.required' => 'MCQ Exam Pass Mark is required.',
            'practical_mark.required' => 'Practical Mark is required.',
            'class_test_mark.required' => 'Class Test Mark is required.',
            'monthly_test_mark.required' => 'Monthly Test Mark is required.',
            'total_mark.required' => 'Total Mark is required.',
            'converted_in.required' => 'Converted In is required.',
            'total_pass_mark.required' => 'Total Pass Mark is required.',
        ];
    }

    /**
     * Configure the error bag for this request.
     *
     * @return string
     */
    public function errorBag(): string
    {
        return 'exam_marks_setup';
    }
}
