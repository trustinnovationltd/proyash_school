<?php

namespace App\Http\Controllers\Backend\Employees;

use App\Http\Controllers\Controller;

use App\Models\Employees\AssignEmployee;
use App\Http\Requests\Backend\Employees\AssignEmployeeRequest;
use App\Models\Employees\Designation;
use App\Models\Employees\Employee;
use App\Models\Employees\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignEmployeeController extends Controller
{
    public function index(Request $request)
    {
        $query = AssignEmployee::with(['employee', 'section', 'designation']);

        if ($request->employee_id) {
            $query->where('employee_id', $request->employee_id);
        }
        if ($request->section_id) {
            $query->where('section_id', $request->section_id);
        }
        if ($request->designation_id) {
            $query->where('designation_id', $request->designation_id);
        }
        if ($request->status !== null && $request->status !== '') {
            $query->where('status', $request->status);
        }

        $assignEmployees = $query->get();

        $employees = Employee::all();
        $sections = Section::all();
        $designations = Designation::all();

        return view('backend.employees.assignEmployee.index', compact('assignEmployees', 'employees', 'sections', 'designations'));
    }

    public function create()
    {
        $employees = Employee::all();
        $sections = Section::all();
        $designations = Designation::all();
        return view('backend.employees.assignEmployee.create', compact('employees', 'sections', 'designations'));
    }

    public function store(AssignEmployeeRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        AssignEmployee::create($data);

        return redirect()->route('assign-employee.index')->with('success', 'Assignment created successfully.');
    }

    public function edit($id)
    {
        $assignEmployee = AssignEmployee::findOrFail($id);
        $employees = Employee::all();
        $sections = Section::all();
        $designations = Designation::all();
        return view('backend.employees.assignEmployee.edit', compact('assignEmployee', 'employees', 'sections', 'designations'));
    }

    public function update(AssignEmployeeRequest $request, $id)
    {
        $assignEmployee = AssignEmployee::findOrFail($id);
        $data = $request->validated();
        $data['updated_by'] = Auth::id();
        $assignEmployee->update($data);

        return redirect()->route('assign-employee.index')->with('success', 'Assignment updated successfully.');
    }

    public function destroy($id)
    {
        $assignEmployee = AssignEmployee::findOrFail($id);
        $assignEmployee->deleted_by = Auth::id();
        $assignEmployee->save();
        $assignEmployee->delete();

        return redirect()->route('assign-employee.index')->with('success', 'Assignment deleted successfully.');
    }
}
