<?php

namespace App\Http\Controllers\Backend\BasicSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BasicSettings\StoreAcademicYearRequest;
use App\Http\Requests\Backend\BasicSettings\UpdateAcademicYearRequest;
use App\Models\BasicSettings\AcademicYear;
use Illuminate\Support\Facades\Auth;

class AcademicYearController extends Controller
{
    public function index()
    {
        $academicYears = AcademicYear::all();

        return view('backend.basicSettings.academicYears.index', compact('academicYears'));
    }

    public function create()
    {
        return view('backend.basicSettings.academicYears.create');
    }

    public function store(StoreAcademicYearRequest $request)
    {
        $validatedData = $request->validated();

        $auth_id = Auth::id();
        $validatedData['created_by'] = $auth_id;
        $validatedData['updated_by'] = $auth_id;

        AcademicYear::create($validatedData);

        return redirect()->route('academic-years.index')->with('success', __('messages.academic_year_create_msg'));
    }

    public function edit(AcademicYear $academicYear)
    {
        return view('backend.basicSettings.academicYears.edit', compact('academicYear'));
    }

    public function update(UpdateAcademicYearRequest $request, AcademicYear $academicYear)
    {
        $updatedData = $request->only(['title', 'description', 'status']);
        $updatedData['updated_by'] = Auth::id();
        $academicYear->update($updatedData);

        return redirect()->route('academic-years.index')->with('success', __('messages.academic_year_update_msg'));
    }

    public function destroy(AcademicYear $academicYear)
    {
        try {
            $academicYear->deleted_by = Auth::id();
            $academicYear->save();
            $academicYear->delete();

            return redirect()->route('academic-years.index')->with('success', __('messages.academic_year_delete_msg'));
        } catch (\Exception $e) {
            return redirect()->route('academic-years.index')->with('error',  __('messages.academic_year_delete_faild_msg') . $e->getMessage());
        }
    }
}
