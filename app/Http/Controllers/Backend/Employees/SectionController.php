<?php

namespace App\Http\Controllers\Backend\Employees;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Employees\StoreSectionRequest;
use App\Http\Requests\Backend\Employees\UpdateSectionRequest;
use App\Models\Employees\Section;
use App\Models\BasicSettings\Institute;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::orderBy('order', 'asc')->paginate(10);
        return view('backend.employees.sections.index', compact('sections'));
    }

    public function create()
    {
        return view('backend.employees.sections.create');
    }

    public function store(StoreSectionRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = Auth::id();

        // Shift orders for existing sections
        Section::where('order', '>=', $data['order'])->increment('order');

        // Insert the new Section at the requested order
        Section::create($data);

        return redirect()->route('sections.index')->with('success', __('messages.section_create_msg'));
    }

    public function edit(Section $section)
    {
        return view('backend.employees.sections.edit', compact('section'));
    }

    public function update(UpdateSectionRequest $request, Section $section)
    {
        $data = $request->validated();
        $data['updated_by'] = Auth::id();

        // Only adjust orders if the order value has changed
        if ($section->order != $data['order']) {
            if ($data['order'] < $section->order) {
                // Moving up: increment orders between new and old position
                Section::where('order', '>=', $data['order'])
                    ->where('order', '<', $section->order)
                    ->increment('order');
            } else {
                // Moving down: decrement orders between old and new position
                Section::where('order', '<=', $data['order'])
                    ->where('order', '>', $section->order)
                    ->decrement('order');
            }
        }

        $section->update($data);

        return redirect()->route('sections.index')->with('success', __('messages.section_update_msg'));
    }

    public function destroy(Section $section)
    {
        $section->update(['deleted_by' => Auth::id(), 'status' => false]);
        $section->delete();

        return redirect()->route('sections.index')->with('success', __('messages.section_delete_msg'));
    }
}
