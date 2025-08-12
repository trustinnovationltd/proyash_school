<?php

namespace App\Http\Controllers\Backend\BasicSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BasicSettings\StoreShiftRequest;
use App\Http\Requests\Backend\BasicSettings\UpdateShiftRequest;
use App\Models\BasicSettings\Shift;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = Shift::all();
        return view('backend.basicSettings.shifts.index', compact('shifts'));
    }

    public function create()
    {
        return view('backend.basicSettings.shifts.create');
    }

    public function store(StoreShiftRequest $request)
    {
        $validatedData = $request->validated();

        $auth_id = Auth::id();
        $validatedData['created_by'] = $auth_id;
        $validatedData['updated_by'] = $auth_id;

        Shift::create($validatedData);

        return redirect()->route('shifts.index')->with('success', __('messages.shift_create_msg'));
    }

    public function edit(Shift $shift)
    {
        return view('backend.basicSettings.shifts.edit', compact('shift'));
    }

    public function update(UpdateShiftRequest $request, Shift $shift)
    {
        $updatedData = $request->only(['title', 'description', 'status']);
        $updatedData['updated_by'] = Auth::id();
        $shift->update($updatedData);

        return redirect()->route('shifts.index')->with('success', __('messages.shift_update_msg'));
    }

    public function destroy(Shift $shift)
    {
        try {
            $shift->deleted_by = Auth::id();
            $shift->save();
            $shift->delete();

            return redirect()->route('shifts.index')->with('success', __('messages.shift_delete_msg'));
        } catch (\Exception $e) {
            return redirect()->route('shifts.index')->with('error',  __('messages.shift_delete_failed_msg') . $e->getMessage());
        }
    }
}
