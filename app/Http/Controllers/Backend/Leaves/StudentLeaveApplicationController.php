<?php

namespace App\Http\Controllers\Backend\Leaves;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Leaves\StoreStudentLeaveApplicationRequest;
// use App\Http\Requests\Backend\Leaves\UpdateStudentLeaveApplicationRequest;
use App\Models\Leaves\StudentLeaveApplication;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\AcademicYear;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Shift;
use App\Models\BasicSettings\Classes;
use App\Models\BasicSettings\Department;
use App\Models\Employees\Employee;
use App\Models\ClassConfigurations\SectionSetup;
use App\Models\Students\Student;
use Illuminate\Support\Facades\Auth;

class StudentLeaveApplicationController extends Controller
{
    /**
     * Get the foreign key data for select options.
     */
    private function getForeignKeyData()
    {
        return [
            'institutes' => Institute::all(),
            'academicYears' => AcademicYear::all(),
            'mediums' => Medium::all(),
            'shifts' => Shift::all(),
            'classes' => Classes::all(),
            'departments' => Department::all(),
            'sections' => SectionSetup::all(),
            'students' => Student::all(),
            'employees' => Employee::all(),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leaveApplications = StudentLeaveApplication::all();
        return view('backend.leaves.studentleaveapplications.index', compact('leaveApplications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all foreign key data
        $data = $this->getForeignKeyData();
        return view('backend.leaves.studentleaveapplications.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentLeaveApplicationRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = Auth::id(); // Set the authenticated user as the creator

        StudentLeaveApplication::create($data);
        return redirect()->route('student-leave-applications.index')
            ->with('success', 'Leave application submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentLeaveApplication $studentLeaveApplication)
    {
        return view('backend.leaves.studentleaveapplications.show', compact('studentLeaveApplication'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentLeaveApplication $studentLeaveApplication)
    {
        
        // Fetch all foreign key data
        $data = $this->getForeignKeyData();
        $data['studentLeaveApplication'] = $studentLeaveApplication;

        return view('backend.leaves.studentleaveapplications.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreStudentLeaveApplicationRequest $request, StudentLeaveApplication $studentLeaveApplication)
    {
        $data = $request->validated();
        $data['updated_by'] = Auth::id(); // Set the authenticated user as the updater

        $studentLeaveApplication->update($data);
        return redirect()->route('student-leave-applications.index')
            ->with('success', 'Leave application updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentLeaveApplication $studentLeaveApplication)
    {
        $studentLeaveApplication->update(['deleted_by' => Auth::id()]); // Track who deleted it
        $studentLeaveApplication->delete(); // Soft delete the resource
        return redirect()->route('student-leave-applications.index')
            ->with('success', 'Leave application deleted successfully!');
    }
}
