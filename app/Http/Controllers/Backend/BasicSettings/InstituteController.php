<?php

namespace App\Http\Controllers\Backend\BasicSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BasicSettings\StoreInstituteRequest;
use App\Http\Requests\Backend\BasicSettings\UpdateInstituteRequest;
use App\Models\BasicSettings\Classes;
use App\Models\BasicSettings\Department;
use App\Models\BasicSettings\ExamType;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Shift;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Storage;

class InstituteController extends Controller
{
    public function index()
    {
        $institutes = Institute::all();
        return view('backend.basicSettings.institutes.index', compact('institutes'));
    }

    public function create()
    {
        $mediums = Medium::active()->get(['id', 'title']);
        $departments = Department::active()->get(['id', 'title']);
        $shifts = Shift::active()->get(['id', 'title']);
        $classes = Classes::active()->get(['id', 'title']);
        $examTypes = ExamType::active()->get(['id', 'title']);
        $weekDays = ['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday'];

        return view('backend.basicSettings.institutes.create', compact('mediums', 'departments', 'shifts', 'classes', 'examTypes', 'weekDays'));
    }

    public function store(StoreInstituteRequest $request)
    {
        try {
            // Generate the unique_id
            $uniqueId = $this->generateUniqueId();

            // Handle file uploads and retrieve file names
            $fileNames = $this->handleFileUploads($request, [
                'logo' => 'logos',
                'banner_image' => 'banners',
            ]);

            // Prepare data for creation
            $instituteData = array_merge(
                $request->only([
                    'name',
                    'branch_name',
                    'address',
                    'eiin_code',
                    'phone',
                    'email',
                    'website',
                    'facebook_link',
                    'youtube_link',
                    'map_link',
                    'android_link',
                    'description',
                    'status'
                ]),
                [
                    'unique_id' => $uniqueId,
                    'medium_ids' => json_encode($request->medium_ids),
                    'department_ids' => json_encode($request->department_ids),
                    'shift_ids' => json_encode($request->shift_ids),
                    'class_ids' => json_encode($request->class_ids),
                    'exam_type_ids' => json_encode($request->exam_type_ids),
                    'weekly_holidays' => json_encode($request->weekly_holidays),
                    'logo' => $fileNames['logo'] ?? null,
                    'dashboard_banner_image' => $fileNames['banner_image'] ?? null,
                    'created_by' => Auth::id(),
                ]
            );

            // Save institute data
            Institute::create($instituteData);

            return redirect()->route('institutes.index')->with('success', 'Institute added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error adding institute: ' . $e->getMessage());
        }
    }

    public function edit(Institute $institute)
    {
        $mediums = Medium::active()->get(['id', 'title']);
        $departments = Department::active()->get(['id', 'title']);
        $shifts = Shift::active()->get(['id', 'title']);
        $classes = Classes::active()->get(['id', 'title']);
        $examTypes = ExamType::active()->get(['id', 'title']);
        $weekDays = ['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday'];

        return view('backend.basicSettings.institutes.edit', compact('institute', 'mediums', 'departments', 'shifts', 'classes', 'examTypes', 'weekDays'));
    }
    public function update(UpdateInstituteRequest $request, $id)
    {
        try {
            // Retrieve the existing institute record
            $institute = Institute::findOrFail($id);

            // Handle file uploads and retrieve file names if new files are provided
            $fileNames = $this->handleFileUploads($request, [
                'logo' => 'logos',
                'banner_image' => 'banners',
            ]);

            // Prepare data for update
            $instituteData = array_merge(
                $request->only([
                    'name',
                    'branch_name',
                    'address',
                    'eiin_code',
                    'phone',
                    'email',
                    'website',
                    'facebook_link',
                    'youtube_link',
                    'map_link',
                    'android_link',
                    'description',
                    'status'
                ]),
                [
                    'medium_ids' => json_encode($request->medium_ids),
                    'department_ids' => json_encode($request->department_ids),
                    'shift_ids' => json_encode($request->shift_ids),
                    'class_ids' => json_encode($request->class_ids),
                    'exam_type_ids' => json_encode($request->exam_type_ids),
                    'weekly_holidays' => json_encode($request->weekly_holidays),
                    // Keep existing logo if no new logo is uploaded
                    'logo' => $fileNames['logo'] ?? $institute->logo,
                    // Keep existing banner image if no new image is uploaded
                    'dashboard_banner_image' => $fileNames['banner_image'] ?? $institute->dashboard_banner_image,
                    'updated_by' => Auth::id(),
                ]
            );

            // Update the institute record
            $institute->update($instituteData);

            return redirect()->route('institutes.index')->with('success', 'Institute updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating institute: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            // Retrieve the specific institute by its ID
            $institute = Institute::findOrFail($id);

            // Pass the institute data to the view
            return view('backend.basicSettings.institutes.view', compact('institute'));
        } catch (\Exception $e) {
            // Handle errors gracefully
            return redirect()->route('institutes.index')->with('error', 'Error retrieving institute details: ' . $e->getMessage());
        }
    }



    public function destroy(Institute $institute)
    {
        try {
            $institute->deleted_by = Auth::id();
            $institute->save();
            $institute->delete();

            return redirect()->route('institutes.index')->with('success', __('messages.institute_delete_msg'));
        } catch (\Exception $e) {
            return redirect()->route('institutes.index')->with('error', __('messages.institute_delete_failed_msg') . $e->getMessage());
        }
    }

    private function generateUniqueId()
    {
        $lastInstitute = Institute::latest('id')->first();
        $newId = $lastInstitute ? $lastInstitute->id + 1 : 1;
        return 'TILEDU_' . str_pad($newId, 5, '0', STR_PAD_LEFT);
    }

    private function handleFileUploads($request, array $fields)
    {
        $fileNames = [];

        foreach ($fields as $field => $folder) {
            if ($request->file($field)) {
                $file = $request->file($field);
                $fileName = time() . '_' . $file->getClientOriginalName();

                // Create the folder path
                $uploadPath = public_path("backend/uploads/settings/$folder");

                // Ensure the folder exists
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                // Move the file
                $file->move($uploadPath, $fileName);

                // Save the file name
                $fileNames[$field] = $fileName;
            }
        }

        return $fileNames;
    }
}
