<?php

namespace App\Http\Controllers\Backend\ClassConfigurations;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ClassConfigurations\StoreClassSetupRequest;
use App\Models\BasicSettings\Classes;
use App\Models\BasicSettings\Department;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Subject;
use App\Models\ClassConfigurations\ClassSetup;
use App\Models\ClassConfigurations\DepartmentSetup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassSetupController extends Controller
{
    public function index()
    {
        $institutes = Institute::active()->get(['id', 'name']);
        $mediums = [];
        return view('backend.classConfigurations.classSetup.create', compact('institutes', 'mediums'));
    }
    public function getClassData(Request $request)
    {
        $institute = Institute::find($request->institute_id);
        $medium_id = $request->medium_id;

        // Check if the institute exists
        if (!$institute) {
            return response()->json(['error' => 'Institute not found'], 404);
        }
        // class_ides from JSON to an array in Institute table
        $classIds = json_decode($institute->class_ids);

        // Retrieve the Medium records that match the medium_ids
        $classes = Classes::whereIn('id', $classIds)->get();

        //find existing id in class_setups table
        $existingClassData = ClassSetup::where('institute_id', $institute->id)->where('medium_id', $medium_id)->first();
        if ($existingClassData) {
            $existingClassIds = json_decode($existingClassData->class_ids);
        } else {
            $existingClassIds = [];
        }

        return response()->json([
            'success' => true,
            'message' => "Class Data Found",
            'medium_id' => $medium_id,
            'institute_id' => $institute->id,
            'classes' => $classes,
            'existingClassIds' => $existingClassIds
        ]);
    }
    public function store(StoreClassSetupRequest $request)
    {
        $validatedData = $request->validated();
        $auth_id = Auth::id();
        $validatedData['class_ids'] = json_encode($request->class_ids);
        $validatedData['created_by'] = $auth_id;
        $validatedData['updated_by'] = $auth_id;

        $isClassSetupExist = ClassSetup::where('institute_id', $request->institute_id)->where('medium_id', $request->medium_id)->first();

        if ($isClassSetupExist) {
            $updatedData = $request->only(['institute_id', 'medium_id']);
            $updatedData['class_ids'] = json_encode($request->class_ids);
            $updatedData['updated_by'] = Auth::id();

            $isClassSetupExist->update($updatedData);

            return response()->json([
                'success' => true,
                'message_en' => __('messages.class_update_msg'),
                'message_en' => '',
            ]);
        }
        ClassSetup::create($validatedData);
        return response()->json([
            'success' => true,
            'message_en' => __('messages.class_update_msg'),
            'message_en' => '',
        ]);
    }


}
