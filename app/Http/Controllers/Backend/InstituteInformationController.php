<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BasicSettings\Classes;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\Medium;
use App\Models\ClassConfigurations\ClassSetup;
use Illuminate\Http\Request;

class InstituteInformationController extends Controller
{
    public function getMediumData($institute_id)
    {
        $institute = Institute::find($institute_id);
        if (!$institute) {
            return response()->json(['error' => 'Institute not found'], 404);
        }

        $mediumIds = json_decode($institute->medium_ids);
        $mediums = Medium::whereIn('id', $mediumIds)->select('id', 'title')->get();

        return response()->json([
            'success' => true,
            'message' => "Medium Data Found",
            'mediums' => $mediums,
        ]);
    }

    public function getClassData(Request $request)
    {
        $institute = Institute::find($request->institute_id);
        $medium_id = $request->medium_id;

        if (!$institute) {
            return response()->json(['error' => 'Institute not found'], 404);
        }

        $existingClassData = ClassSetup::where('institute_id', $institute->id)
            ->where('medium_id', $medium_id)
            ->first();

        $classIds = $existingClassData ? json_decode($existingClassData->class_ids, true) : [];
        $classes = Classes::whereIn('id', $classIds)->get();

        if ($classes->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => "Class Data Not Found!",
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => "Class Data Found!",
            'classes' => $classes,
        ]);
    }
    public function getDepartmentData(Request $request)
    {
        $institute = Institute::find($request->institute_id);
        $medium_id = $request->medium_id;
        $class_id = $request->class_id;

        if (!$institute) {
            return response()->json(['error' => 'Institute not found'], 404);
        }

        $existingDepartmentData = ClassSetup::where('institute_id', $institute->id)
            ->where('medium_id', $medium_id)
            ->first();

        $classIds = $existingDepartmentData ? json_decode($existingDepartmentData->class_ids, true) : [];
        $classes = Classes::whereIn('id', $classIds)->get();

        if ($classes->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => "Class Data Not Found!",
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => "Class Data Found!",
            'classes' => $classes,
        ]);
    }
}
