<?php

namespace App\Http\Controllers\Backend\BasicSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BasicSettings\StoreSubjectRequest;
use App\Http\Requests\Backend\BasicSettings\UpdateSubjectRequest;
use App\Models\BasicSettings\Subject;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('backend.basicSettings.subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('backend.basicSettings.subjects.create');
    }

    public function store(StoreSubjectRequest $request)
    {
        $validatedData = $request->validated();

        $auth_id = Auth::id();
        $validatedData['created_by'] = $auth_id;
        $validatedData['updated_by'] = $auth_id;

        Subject::create($validatedData);

        return redirect()->route('subjects.index')->with('success', __('messages.subject_create_msg'));
    }

    public function edit(Subject $subject)
    {
        return view('backend.basicSettings.subjects.edit', compact('subject'));
    }

    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $updatedData = $request->only(['title', 'code', 'description', 'status']);
        $updatedData['updated_by'] = Auth::id();
        $subject->update($updatedData);

        return redirect()->route('subjects.index')->with('success', __('messages.subject_update_msg'));
    }

    public function destroy(Subject $subject)
    {
        try {
            $subject->deleted_by = Auth::id();
            $subject->save();
            $subject->delete();

            return redirect()->route('subjects.index')->with('success', __('messages.subject_delete_msg'));
        } catch (\Exception $e) {
            return redirect()->route('subjects.index')->with('error',  __('messages.subject_delete_failed_msg') . $e->getMessage());
        }
    }
}
