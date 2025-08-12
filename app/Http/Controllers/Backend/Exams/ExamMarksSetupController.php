<?php

namespace App\Http\Controllers\Backend\Exams;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Exams\StoreExamMarkSetupRequest;
// use App\Http\Requests\Backend\Exams\UpdateExamMarkSetupRequest;
use App\Models\Exams\ExamMarkSetup;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\AcademicYear;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Shift;
use App\Models\BasicSettings\Classes;
use App\Models\BasicSettings\Department;
use App\Models\BasicSettings\Subject;
use Illuminate\Support\Facades\Auth;

class ExamMarksSetupController extends Controller
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
            'subjects' => Subject::all(),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $examMarksSetups = ExamMarkSetup::all();
        return view('backend.exams.exammarksetups.index', compact('examMarksSetups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all foreign key data
        $data = $this->getForeignKeyData();
        return view('backend.exams.exammarksetups.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExamMarkSetupRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = Auth::id(); // Set the authenticated user as the creator

        ExamMarkSetup::create($data);
        return redirect()->route('exam-marks-setups.index')
            ->with('success', 'Exam marks setup created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExamMarkSetup $examMarksSetup)
    {
        return view('backend.exams.exammarksetups.show', compact('examMarksSetup'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExamMarkSetup $examMarksSetup)
    {
        // Fetch all foreign key data
        $data = $this->getForeignKeyData();
        $data['examMarksSetup'] = $examMarksSetup;

        return view('backend.exams.exammarksetups.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreExamMarkSetupRequest $request, ExamMarkSetup $examMarksSetup)
    {
        $data = $request->validated();
        $data['updated_by'] = Auth::id(); // Set the authenticated user as the updater

        $examMarksSetup->update($data);
        return redirect()->route('exam-marks-setups.index')
            ->with('success', 'Exam marks setup updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExamMarkSetup $examMarksSetup)
    {
        $examMarksSetup->update(['deleted_by' => Auth::id()]); // Track who deleted it
        $examMarksSetup->delete(); // Soft delete the resource
        return redirect()->route('exam-marks-setups.index')
            ->with('success', 'Exam marks setup deleted successfully!');
    }
}
