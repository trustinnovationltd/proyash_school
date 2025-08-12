<?php

namespace App\Http\Controllers\Backend\ClassConfigurations;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ClassConfigurations\StoreSubjectSetupRequest;
use App\Models\BasicSettings\Institute;
use App\Models\ClassConfigurations\DepartmentSetup;
use App\Models\ClassConfigurations\SubjectSetup;
use Illuminate\Support\Facades\Auth;

class SubjectSetupController extends Controller
{
    public function index()
    {
        $institutes = Institute::active()->get(['id', 'name']);
        return view('backend.classConfigurations.subjectSetup.create', compact('institutes'));
    }


    public function store(StoreSubjectSetupRequest $request)
    {
        // dd($request->all());
        $validatedData = $request->validated();

        $auth_id = Auth::id();
        $validatedData['created_by'] = $auth_id;
        SubjectSetup::create($validatedData);

        return redirect()->route('department_setup.index')->with('success', __('messages.department_setup_create_msg'));
    }
}
