<?php

namespace App\Http\Controllers\Backend\BasicSettings;

use App\Http\Controllers\Controller;
use App\Models\BasicSettings\HolidaySetting;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\AcademicYear;
use App\Models\BasicSettings\Medium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HolidaySettingController extends Controller
{
    public function index()
    {
        // Fetch holiday settings with relationships
        $holidaySettings = HolidaySetting::with(['institute', 'academicYear', 'medium'])->get();
        return view('backend.basicSettings.holidaySettings.index', compact('holidaySettings'));
    }

    public function create()
    {
        // Fetch data for dropdowns
        $institutes = Institute::all();
        $academicYears = AcademicYear::all();
        $mediums = Medium::all();

        // Return view with data
        return view('backend.basicSettings.holidaySettings.create', compact('institutes', 'academicYears', 'mediums'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'institute_id' => 'required|exists:institutes,id',
            'academic_year_id' => 'required|exists:academic_years,id',
            'medium_id' => 'required|exists:mediums,id',  // Corrected to medium_id
            'holiday_type' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        // Store the new holiday setting
        HolidaySetting::create(array_merge(
            $request->all(),
            ['created_by' => Auth::id()]
        ));

        return redirect()->route('holiday-settings.index')->with('success',  __('messages.holiday_setting_create_msg'));
    }

    public function edit(HolidaySetting $holidaySetting)
    {
        // Fetch data for dropdowns and the current holiday setting
        $institutes = Institute::all();
        $academicYears = AcademicYear::all();
        $mediums = Medium::all();

        // Return the edit view with the current holiday setting
        return view('backend.basicSettings.holidaySettings.edit', compact('holidaySetting', 'institutes', 'academicYears', 'mediums'));
    }

    public function update(Request $request, HolidaySetting $holidaySetting)
    {
        // Validate the incoming request
        $request->validate([
            'institute_id' => 'required|exists:institutes,id',
            'academic_year_id' => 'required|exists:academic_years,id',
            'medium_id' => 'required|exists:mediums,id',  // Corrected to medium_id
            'holiday_type' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        // Update the existing holiday setting
        $holidaySetting->update(array_merge(
            $request->all(),
            ['updated_by' => Auth::id()]
        ));

        return redirect()->route('holiday-settings.index')->with('success',__('messages.holiday_setting_update_msg'));
    }

    public function destroy(HolidaySetting $holidaySetting)
    {
        // Set the user who deleted the setting
        $holidaySetting->update(['deleted_by' => Auth::id()]);

        // Delete the holiday setting
        $holidaySetting->delete();

        return redirect()->route('holiday-settings.index')->with('success',  __('messages.holiday_setting_delete_msg'));
    }
}
