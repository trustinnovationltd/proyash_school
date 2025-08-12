<?php

namespace App\Http\Controllers\Backend\BasicSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BasicSettings\StoreExamTypeRequest;
use App\Http\Requests\Backend\BasicSettings\UpdateExamTypeRequest;
use App\Models\BasicSettings\ExamType;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamTypeController extends Controller
{
    public function index()
    {
        $examTypes = ExamType::all();
        return view('backend.basicSettings.examTypes.index', compact('examTypes'));
    }

    public function create()
    {
        return view('backend.basicSettings.examTypes.create');
    }

    public function store(StoreExamTypeRequest $request)
    {
        $validatedData = $request->validated();

        $auth_id = Auth::id();
        $validatedData['created_by'] = $auth_id;
        $validatedData['updated_by'] = $auth_id;

        ExamType::create($validatedData);

        return redirect()->route('exam-types.index')->with('success', __('messages.exam_type_create_msg'));
    }

    public function edit(ExamType $examType)
    {
        return view('backend.basicSettings.examTypes.edit', compact('examType'));
    }

    public function update(UpdateExamTypeRequest $request, ExamType $examType)
    {
        $updatedData = $request->only(['title', 'code', 'description', 'status']);
        $updatedData['updated_by'] = Auth::id();
        $examType->update($updatedData);

        return redirect()->route('exam-types.index')->with('success', __('messages.exam_type_update_msg'));
    }

    public function destroy(ExamType $examType)
    {
        try {
            $examType->deleted_by = Auth::id();
            $examType->save();
            $examType->delete();

            return redirect()->route('exam-types.index')->with('success', __('messages.exam_type_delete_msg'));
        } catch (\Exception $e) {
            return redirect()->route('exam-types.index')->with('error',  __('messages.exam_type_delete_failed_msg') . $e->getMessage());
        }
    }
}
