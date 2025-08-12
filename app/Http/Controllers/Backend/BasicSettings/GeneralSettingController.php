<?php

namespace App\Http\Controllers\Backend\BasicSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BasicSettings\StoreGeneralSettingRequest;
use App\Models\BasicSettings\GeneralSetting;
use App\Models\BasicSettings\Institute;  // Make sure to import the Institute model
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the General Settings.
     */
    public function index()
    {
        $generalSettings = GeneralSetting::all();
        return view('backend.basicSettings.generalSettings.index', compact('generalSettings'));
    }

    /**
     * Show the form for creating a new General Setting.
     */
    public function create()
    {
        // Get all institutes to populate the dropdown
        $institutes = Institute::get(['id', 'name']);
        return view('backend.basicSettings.generalSettings.create', compact('institutes'));
    }

    /**
     * Store a newly created General Setting.
     */
    public function store(StoreGeneralSettingRequest $request)
    {
        // Get validated data
        $data = $request->validated();

        // Convert unchecked checkbox fields to false (nullable booleans)
        $data['present_sms'] = $data['present_sms'] ?? false;
        $data['leave_sms'] = $data['leave_sms'] ?? false;
        $data['absent_sms'] = $data['absent_sms'] ?? false;
        $data['fee_collection_sms'] = $data['fee_collection_sms'] ?? false;
        $data['admission_greeting_sms'] = $data['admission_greeting_sms'] ?? false;
        $data['birthday_sms'] = $data['birthday_sms'] ?? false;
        $data['student_id_automatic'] = $data['student_id_automatic'] ?? false;

        // Add created_by field (set to the authenticated user's ID)
        $data['created_by'] = Auth::id();

        // Create the General Setting record
        GeneralSetting::create($data);

        // Redirect back to the index page with success message
        return redirect()->route('general-settings.index')->with('success', __('messages.general_setting_create_msg'));
    }

    /**
     * Show the form for editing the specified General Setting.
     */
    public function edit(GeneralSetting $generalSetting)
    {
        // Get all institutes to populate the dropdown
        $institutes = Institute::all();

        return view('backend.basicSettings.generalSettings.edit', compact('generalSetting', 'institutes'));
    }

    /**
     * Update the specified General Setting.
     */
    public function update(StoreGeneralSettingRequest $request, GeneralSetting $generalSetting)
    {
        // Get validated data
        $data = $request->validated();

        // Convert unchecked checkbox fields to false (nullable booleans)
        $data['present_sms'] = $data['present_sms'] ?? false;
        $data['leave_sms'] = $data['leave_sms'] ?? false;
        $data['absent_sms'] = $data['absent_sms'] ?? false;
        $data['fee_collection_sms'] = $data['fee_collection_sms'] ?? false;
        $data['admission_greeting_sms'] = $data['admission_greeting_sms'] ?? false;
        $data['birthday_sms'] = $data['birthday_sms'] ?? false;
        $data['student_id_automatic'] = $data['student_id_automatic'] ?? false;

        // Add updated_by field (set to the authenticated user's ID)
        $data['updated_by'] = Auth::id();

        // Update the General Setting record
        $generalSetting->update($data);

        // Redirect back to the index page with success message
        return redirect()->route('general-settings.index')->with('success', __('messages.general_setting_update_msg'));
    }

    /**
     * Remove the specified General Setting.
     */
    public function destroy(GeneralSetting $generalSetting)
    {
        // Update the deleted_by field before deleting
        $generalSetting->update(['deleted_by' => Auth::id()]);

        // Soft delete the General Setting record
        $generalSetting->delete();

        // Redirect back to the index page with success message
        return redirect()->route('general-settings.index')->with('success', __('messages.general_setting_delete_msg'));
    }
}
