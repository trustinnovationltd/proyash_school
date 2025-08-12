<?php

namespace App\Http\Controllers\Backend\BasicSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\basicSettings\StoreDepartmentMGTRequest;
use App\Http\Requests\Backend\basicSettings\UpdateDepartmentMGTRequest;
use App\Models\BasicSettings\Department;
use Illuminate\Support\Facades\Auth;

class DepartmentMGTController extends Controller
{
    public function index()
    {
        $departmentMGTs = Department::all();

        return view('backend.basicSettings.departmentMGTs.index', compact('departmentMGTs'));
    }

    public function create()
    {
        return view('backend.basicSettings.departmentMGTs.create');
    }

    public function store(StoreDepartmentMGTRequest $request)
    {
        $validatedData = $request->validated();

        $auth_id = Auth::id();
        $validatedData['created_by'] = $auth_id;
        $validatedData['updated_by'] = $auth_id;

        Department::create($validatedData);

        return redirect()->route('department-mgts.index')->with('success', __('messages.department_mgt_create_msg'));
    }

    public function edit(Department $departmentMGT)
    {
        return view('backend.basicSettings.departmentMGTs.edit', compact('departmentMGT'));
    }

    public function update(UpdateDepartmentMGTRequest $request, Department $departmentMGT)
    {
        $updatedData = $request->only(['title', 'description', 'status']);
        $updatedData['updated_by'] = Auth::id();
        $departmentMGT->update($updatedData);

        return redirect()->route('department-mgts.index')->with('success', __('messages.department_mgt_update_msg'));
    }

    public function destroy(Department $departmentMGT)
    {
        try {
            dd($departmentMGT);
            
            $departmentMGT->deleted_by = Auth::id();
            $departmentMGT->save();
            $departmentMGT->delete();

            return redirect()->route('department-mgts.index')->with('success', __('messages.department_mgt_delete_msg'));
        } catch (\Exception $e) {
            return redirect()->route('department-mgts.index')->with('error',  __('messages.department_mgt_delete_faild_msg') . $e->getMessage());
        }
    }
}
