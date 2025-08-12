<?php

namespace App\Http\Controllers\Backend\BasicSettings;

use App\Http\Controllers\Controller;
// use App\Http\Requests\Backend\BasicSettings\StoreEventSettingRequest;
use App\Models\BasicSettings\EventSetting;
// use App\Models\BasicSettings\Institute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventSettingController extends Controller

{
    public function index()
    {
        $eventSettings = EventSetting::all();
        return view('backend.basicSettings.eventSettings.index', compact('eventSettings'));
    }

    public function create()
    {
        return view('backend.basicSettings.eventSettings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'class_status' => 'nullable|boolean',
            'status' => 'nullable|boolean',
        ]);

        $validated['created_by'] = Auth::id();
        EventSetting::create($validated);

        return redirect()->route('event-settings.index')->with('success',  __('messages.event_setting_create_msg'));
    }

    public function edit(EventSetting $eventSetting)
    {
        return view('backend.basicSettings.eventSettings.edit', compact('eventSetting'));
    }

    public function update(Request $request, EventSetting $eventSetting)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'class_status' => 'nullable|boolean',
            'status' => 'nullable|boolean',
        ]);

        $validated['updated_by'] = Auth::id();
        $eventSetting->update($validated);

        return redirect()->route('event-settings.index')->with('success', __('messages.event_setting_update_msg'));
    }

    public function destroy(EventSetting $eventSetting)
    {
        try {
            // Update the deleted_by field
            $eventSetting->update(['deleted_by' => Auth::id()]);
    
            // Soft delete the record
            $eventSetting->delete();
    
            // Redirect with success message
            return redirect()->route('event-settings.index')->with('success', __('messages.event_setting_delete_msg'));
        } catch (\Exception $e) {
            // Handle potential exceptions
            return redirect()->route('event-settings.index')->with('error', 'Failed to delete the event setting. Please try again.');
        }
    }
    
}
