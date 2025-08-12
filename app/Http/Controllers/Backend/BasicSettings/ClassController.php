<?php

namespace App\Http\Controllers\Backend\BasicSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BasicSettings\StoreClassRequest;
use App\Http\Requests\Backend\BasicSettings\UpdateClassRequest;
use App\Models\BasicSettings\Classes;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Classes::all();
        return view('backend.basicSettings.classes.index', compact('classes'));
    }

    public function create()
    {
        return view('backend.basicSettings.classes.create');
    }

    public function store(StoreClassRequest $request)
    {
        $validatedData = $request->validated();

        $auth_id = Auth::id();
        $validatedData['created_by'] = $auth_id;
        $validatedData['updated_by'] = $auth_id;

        Classes::create($validatedData);

        return redirect()->route('classes.index')->with('success', __('messages.class_create_msg'));
    }

    public function edit(Classes $class)
    {
        return view('backend.basicSettings.classes.edit', compact('class'));
    }

    public function update(UpdateClassRequest $request, Classes $class)
    {
        $updatedData = $request->only(['title', 'description', 'status']);
        $updatedData['updated_by'] = Auth::id();
        $class->update($updatedData);

        return redirect()->route('classes.index')->with('success', __('messages.class_update_msg'));
    }

    public function destroy(Classes $class)
    {
        try {
            $class->deleted_by = Auth::id();
            $class->save();
            $class->delete();

            return redirect()->route('classes.index')->with('success', __('messages.class_delete_msg'));
        } catch (\Exception $e) {
            return redirect()->route('classes.index')->with('error',  __('messages.class_delete_failed_msg') . $e->getMessage());
        }
    }
}
