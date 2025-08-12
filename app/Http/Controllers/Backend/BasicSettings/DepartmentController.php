<?php

namespace App\Http\Controllers\Backend\BasicSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BasicSettings\StoreDepartmentRequest;
use App\Http\Requests\Backend\BasicSettings\UpdateDepartmentRequest;
use App\Models\BasicSettings\Department;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('backend.basicSettings.departments.index', compact('departments'));
    }

    public function create()
    {
        return view('backend.basicSettings.departments.create');
    }

    public function store(StoreDepartmentRequest $request)
    {
        $validatedData = $request->validated();

        $auth_id = Auth::id();
        $validatedData['created_by'] = $auth_id;
        $validatedData['updated_by'] = $auth_id;

        Department::create($validatedData);

        return redirect()->route('departments.index')->with('success', __('messages.department_create_msg'));
    }

    public function edit(Department $department)
    {
        return view('backend.basicSettings.departments.edit', compact('department'));
    }

    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $updatedData = $request->only(['title', 'description', 'status']);
        $updatedData['updated_by'] = Auth::id();
        $department->update($updatedData);

        return redirect()->route('departments.index')->with('success', __('messages.department_update_msg'));
    }

    public function destroy(Department $department)
    {
        try {
            $department->deleted_by = Auth::id();
            $department->save();
            $department->delete();

            return redirect()->route('departments.index')->with('success', __('messages.department_delete_msg'));
        } catch (\Exception $e) {
            return redirect()->route('departments.index')->with('error',  __('messages.department_delete_failed_msg') . $e->getMessage());
        }
    }
}
