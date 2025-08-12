<?php

namespace App\Http\Controllers\Backend\Employees;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Employees\StoreDesignationRequest;
use App\Http\Requests\Backend\Employees\UpdateDesignationRequest;
use App\Models\Employees\Designation;
use App\Models\BasicSettings\Institute;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::orderBy('order', 'asc')->paginate(10);
        return view('backend.employees.designations.index', compact('designations'));
    }

    public function create()
    {
        return view('backend.employees.designations.create');
    }

    public function store(StoreDesignationRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = Auth::id();

        // Shift orders for existing designations
        Designation::where('order', '>=', $data['order'])->increment('order');

        // Insert the new designation at the requested order
        Designation::create($data);

        return redirect()->route('designations.index')->with('success', __('messages.designation_create_msg'));
    }

    public function edit(Designation $designation)
    {
        return view('backend.employees.designations.edit', compact('designation'));
    }

    public function update(UpdateDesignationRequest $request, Designation $designation)
    {
        $data = $request->validated();
        $data['updated_by'] = Auth::id();

        // Only adjust orders if the order value has changed
        if ($designation->order != $data['order']) {
            if ($data['order'] < $designation->order) {
                // Moving up: increment orders between new and old position
                Designation::where('order', '>=', $data['order'])
                    ->where('order', '<', $designation->order)
                    ->increment('order');
            } else {
                // Moving down: decrement orders between old and new position
                Designation::where('order', '<=', $data['order'])
                    ->where('order', '>', $designation->order)
                    ->decrement('order');
            }
        }

        $designation->update($data);

        return redirect()->route('designations.index')->with('success', __('messages.designation_update_msg'));
    }

    public function destroy(Designation $designation)
    {
        $designation->update(['deleted_by' => Auth::id(), 'status' => false]);
        $designation->delete();

        return redirect()->route('designations.index')->with('success', __('messages.designation_delete_msg'));
    }
}
