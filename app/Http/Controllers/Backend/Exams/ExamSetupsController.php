<?php

namespace App\Http\Controllers\Backend\Exams;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Exams\StoreExamSetupRequest; // Assuming you have a custom request for validation
use App\Models\Exams\ExamSetup;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\AcademicYear;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Shift;
use App\Models\BasicSettings\Classes;
use App\Models\BasicSettings\ExamType;
use Illuminate\Support\Facades\Auth;

class ExamSetupsController extends Controller
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
            'examTypes' => ExamType::all(),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $examSetups = ExamSetup::all();
        return view('backend.exams.examsetups.index', compact('examSetups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all foreign key data
        $data = $this->getForeignKeyData();
        return view('backend.exams.examsetups.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExamSetupRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = Auth::id(); // Set the authenticated user as the creator

        ExamSetup::create($data);
        return redirect()->route('exam-setups.index')
            ->with('success', 'Exam setup created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExamSetup $examSetup)
    {
        return view('backend.exams.examsetups.show', compact('examSetup'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExamSetup $examSetup)
    {
        // Fetch all foreign key data
        $data = $this->getForeignKeyData();
        $data['examSetup'] = $examSetup;

        return view('backend.exams.examsetups.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreExamSetupRequest $request, ExamSetup $examSetup)
    {
        $data = $request->validated();
        $data['updated_by'] = Auth::id(); // Set the authenticated user as the updater

        $examSetup->update($data);
        return redirect()->route('exam-setups.index')
            ->with('success', 'Exam setup updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExamSetup $examSetup)
    {
        $examSetup->update(['deleted_by' => Auth::id()]); // Track who deleted it
        $examSetup->delete(); // Soft delete the resource
        return redirect()->route('exam-setups.index')
            ->with('success', 'Exam setup deleted successfully!');
    }
}
