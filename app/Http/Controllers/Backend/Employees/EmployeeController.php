<?php

namespace App\Http\Controllers\Backend\Employees;

use App\DataTables\EmployeeDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Employees\StoreEmployeeRequest;
use App\Http\Requests\Backend\Employees\UpdateEmployeeRequest;
use App\Models\Employees\Employee;
use App\Models\Employees\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index2()
    {
        $employees = Employee::all();
        return view('backend.employees.employees.index', compact('employees'));
    }

    public function index(EmployeeDataTable $dataTable)
    {
        return $dataTable->render('backend.employees.employees.index');
    }

    public function create()
    {

        return view('backend.employees.employees.create');
    }

    public function store(StoreEmployeeRequest $request)
    {
        // dd($request->all());
        $data = $request->validated();

        // Handle file uploads
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('employees/images', 'public');
        }
        if ($request->hasFile('signature')) {
            $data['signature'] = $request->file('signature')->store('employees/signatures', 'public');
        }

        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        $data['deleted_by'] = null;

        Employee::create($data);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit(Employee $employee)
    {
        return view('backend.employees.employees.edit', compact(
            'employee'
        ));
    }

    public function update(UpdateEmployeeRequest $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $data = $request->validated();

        // Handle file uploads
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($employee->image) {
                Storage::disk('public')->delete($employee->image);
            }
            $data['image'] = $request->file('image')->store('employees/images', 'public');
        }

        if ($request->hasFile('signature')) {
            // Delete old signature if exists
            if ($employee->signature) {
                Storage::disk('public')->delete($employee->signature);
            }
            $data['signature'] = $request->file('signature')->store('employees/signatures', 'public');
        }

        $data['updated_by'] = Auth::id();

        $employee->update($data);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function show($id)
    {
        try {
            $employee = Employee::findOrFail($id);
            return view('backend.employees.employees.view', compact('employee'));
        } catch (\Exception $e) {
            return redirect()->route('employees.index')->with('error', 'Error retrieving employee details: ' . $e->getMessage());
        }
    }

    public function destroy(Employee $employee)
    {
        $employee->update(['deleted_by' => Auth::id(), 'status' => '2']); // Mark as deleted
        $employee->delete();

        return redirect()->route('employees.index')->with('success', __('messages.employee_delete_msg'));
    }

    public function getDesignationsByInstitute(Request $request)
    {
        $designations = Designation::where('institute_id', $request->institute_id)->get();

        return response()->json([
            'success' => true,
            'designations' => $designations
        ]);
    }

    public function getEmployeesByInstituteAndDesignation(Request $request)
    {
        $employees = Employee::where('institute_id', $request->institute_id)
            ->where('designation_id', $request->designation_id)
            ->get();

        return response()->json([
            'success' => true,
            'employees' => $employees
        ]);
    }
}
