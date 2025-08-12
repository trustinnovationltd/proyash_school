<?php

namespace App\Http\Controllers\Backend\BasicSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BasicSettings\StoreMediumRequest;
use App\Http\Requests\Backend\BasicSettings\UpdateMediumRequest;
use App\Models\BasicSettings\Medium;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediumController extends Controller
{
    public function index()
    {
        $mediums = Medium::all();
        return view('backend.basicSettings.mediums.index', compact('mediums'));
    }

    public function create()
    {
        return view('backend.basicSettings.mediums.create');
    }

    public function store(StoreMediumRequest $request)
    {
        $validatedData = $request->validated();

        $auth_id = Auth::id();
        $validatedData['created_by'] = $auth_id;
        $validatedData['updated_by'] = $auth_id;

        Medium::create($validatedData);

        return redirect()->route('mediums.index')->with('success', __('messages.medium_create_msg'));
    }

    public function edit(Medium $medium)
    {
        return view('backend.basicSettings.mediums.edit', compact('medium'));
    }

    public function update(UpdateMediumRequest $request, Medium $medium)
    {
        $updatedData = $request->only(['title', 'description', 'status']);
        $updatedData['updated_by'] = Auth::id();
        $medium->update($updatedData);

        return redirect()->route('mediums.index')->with('success', __('messages.medium_update_msg'));
    }

    public function destroy(Medium $medium)
    {
        try {
            $medium->deleted_by = Auth::id();
            $medium->save();
            $medium->delete();

            return redirect()->route('mediums.index')->with('success', __('messages.medium_delete_msg'));
        } catch (\Exception $e) {
            return redirect()->route('mediums.index')->with('error',  __('messages.medium_delete_failed_msg') . $e->getMessage());
        }
    }
}
