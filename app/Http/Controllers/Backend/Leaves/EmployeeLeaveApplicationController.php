<?php

namespace App\Http\Controllers\Backend\Leaves;

use App\Http\Controllers\Controller;
use App\Models\Leaves\EmployeeLeaveApplication;
use App\Models\BasicSettings\Institute;
use App\Models\Employees\Employee;
use App\Models\Employees\Designation;
use App\Http\Requests\Backend\Leaves\StoreEmployeeLeaveApplicationRequest;
use Illuminate\Support\Facades\Auth;

class EmployeeLeaveApplicationController extends Controller
{
    /**
     * Display a listing of the leave applications.
     */
    public function index()
    {
        $leaveApplications = EmployeeLeaveApplication::with(['employee', 'institute', 'designation'])->get();
        return view('backend.leaves.employeeleaveapplications.index', compact('leaveApplications'));
    }

    /**
     * Show the form for creating a new leave application.
     */
    public function create()
    {
        $institutes = Institute::all();
        $employees = Employee::all();
        $designations = Designation::all();

        return view('backend.leaves.employeeleaveapplications.create', compact('institutes', 'employees', 'designations'));
    }

    /**
     * Store a newly created leave application in storage.
     */
    public function store(StoreEmployeeLeaveApplicationRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = Auth::id();

        EmployeeLeaveApplication::create($data);

        return redirect()->route('leave-applications.index')->with('success', 'Leave application created successfully.');
    }

    /**
     * Display the specified leave application.
     */
    public function show(EmployeeLeaveApplication $leaveApplication)
    {
        return view('backend.leaves.employeeleaveapplications.show', compact('leaveApplication'));
    }

    /**
     * Show the form for editing the specified leave application.
     */
    public function edit(EmployeeLeaveApplication $leaveApplication)
    {
        $institutes = Institute::all();
        $employees = Employee::all();
        $designations = Designation::all();

        return view('backend.leaves.employeeleaveapplications.edit', compact('leaveApplication', 'institutes', 'employees', 'designations'));
    }

    /**
     * Update the specified leave application in storage.
     */
    public function update(StoreEmployeeLeaveApplicationRequest $request, EmployeeLeaveApplication $leaveApplication)
    {
        $data = $request->validated();
        $data['updated_by'] = Auth::id();

        $leaveApplication->update($data);

        return redirect()->route('leave-applications.index')->with('success', 'Leave application updated successfully.');
    }

    /**
     * Remove the specified leave application from storage.
     */
    public function destroy(EmployeeLeaveApplication $leaveApplication)
    {
        $leaveApplication->delete();

        return redirect()->route('leave-applications.index')->with('success', 'Leave application deleted successfully.');
    }
}
