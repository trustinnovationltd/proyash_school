<?php

namespace App\Http\Controllers\Backend\ClassConfigurations;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ClassConfigurations\StoreDepartmentSetupRequest;
use App\Models\BasicSettings\Classes;
use App\Models\BasicSettings\Department;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\Medium;
use App\Models\ClassConfigurations\ClassSetup;
use App\Models\ClassConfigurations\DepartmentSetup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentSetupController extends Controller
{
    public function index()
    {
        $institutes = Institute::active()->get(['id', 'name']);
        return view('backend.classConfigurations.departmentSetup.create', compact('institutes'));
    }

    public function getDepartmentData(Request $request)
    {
        $institute = Institute::find($request->institute_id);
        $medium_id = $request->medium_id;
        $class_id = $request->class_id;
        // Check if the institute exists
        if (!$institute) {
            return response()->json(['error' => 'Institute not found'], 404);
        }
        // class_ides from JSON to an array in Institute table
        $departmentIds = json_decode($institute->department_ids);

        // Retrieve the Medium records that match the medium_ids
        $departments = Department::whereIn('id', $departmentIds)->get();

        //find existing id in class_setups table
        $existingDepartmentsData = DepartmentSetup::where('institute_id', $institute->id)->where('medium_id', $medium_id)->where('class_id', $class_id)->first();

        if ($existingDepartmentsData) {
            $existingDepartmentIds = json_decode($existingDepartmentsData->department_ids) ?? [];
        } else {
            $existingDepartmentIds = [];
        }

        return response()->json([
            'success' => true,
            'message' => "Department Data Found",
            'departments' => $departments,
            'existingDepartmentIds' => $existingDepartmentIds
        ]);
    }

    public function subjectSetupDepartmentData(Request $request)
    {
        $institute = Institute::find($request->institute_id);
        $medium_id = $request->medium_id;
        $class_id = $request->class_id;
        // Check if the institute exists
        if (!$institute) {
            return response()->json(['error' => 'Institute not found'], 404);
        }


        //find existing id in class_setups table
        $existingDepartmentsData = DepartmentSetup::where('institute_id', $institute->id)->where('medium_id', $medium_id)->where('class_id', $class_id)->first();

        if (!$existingDepartmentsData) {
            return response()->json([
                'success' => false,
                'message' => "Department Data Not Found",
            ]);
        }

        $departments = Department::whereIn('id', json_decode($existingDepartmentsData->department_ids))->get();
        $subjects = Subject::where('status', 1)->get();

        return response()->json([
            'success' => true,
            'message' => "Department Data Found",
            'departments' => $departments,
            'subjects' => $subjects,

        ]);
    }

    public function store(StoreDepartmentSetupRequest $request)
    {
        $validatedData = $request->validated();
        $auth_id = Auth::id();
        $validatedData['department_ids'] = json_encode($request->department_ids);
        $validatedData['created_by'] = $auth_id;
        $validatedData['updated_by'] = $auth_id;

        $isDepartmentSetupExist = DepartmentSetup::where('institute_id', $request->institute_id)->where('medium_id', $request->medium_id)->where('class_id', $request->class_id)->first();

        if ($isDepartmentSetupExist) {
            $updatedData = $request->only(['institute_id', 'medium_id', 'class_id']);
            $updatedData['department_ids'] = json_encode($request->department_ids);
            $updatedData['updated_by'] = Auth::id();

            $isDepartmentSetupExist->update($updatedData);

            return response()->json([
                'success' => true,
                'message_en' => __('messages.department_setup_update_msg'),
                'message_en' => '',
            ]);
        }
        DepartmentSetup::create($validatedData);
        return response()->json([
            'success' => true,
            'message_en' => __('messages.department_setup_create_msg'),
            'message_en' => '',
        ]);
    }
}
