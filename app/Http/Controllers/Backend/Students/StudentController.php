<?php

namespace App\Http\Controllers\Backend\Students;

use App\DataTables\AdmissionDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Students\StoreStudentRequest;
use App\Http\Requests\Backend\Students\UpdateStudentRequest;
use App\Models\Address;
use App\Models\BasicSettings\AcademicYear;
use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(AdmissionDataTable $dataTable)
    {
        return $dataTable->render('backend.students.admission.index');
    }

    public function create()
    {
        return view('backend.students.admission.create');
    }

    public function store(StoreStudentRequest $request)
    {
        // dd($request->all());
        $data = $request->validated();
        // Start DB transaction to prevent partial save on error
        DB::beginTransaction();

        try {
            // Upload files
            $student_image = null;
            if ($request->hasFile('student_image')) {
                $student_image = $request->file('student_image')->store('students/image', 'public');
            }

            $guardian_signature = null;
            if ($request->hasFile('guardian_signature')) {
                $guardian_signature = $request->file('guardian_signature')->store('students/guardian/signature', 'public');
            }

            $student_signature = null;
            if ($request->hasFile('student_signature')) {
                $student_signature = $request->file('student_signature')->store('students/signature', 'public');
            }
            // Create student
            $student = Student::create([
                'name_bn' => $data['name_bn'] ?? null,
                'name_en' => $data['name_en'] ?? null,
                'birth_date' => $data['birth_date'] ?? null,
                'nationality' => $data['nationality'] ?? null,
                'religion' => $data['religion'] ?? null,
                'admission_date' => $data['admission_date'] ?? null,
                'admission_year' => $data['admission_year'] ?? null,
                'blood_group' => $data['blood_group'] ?? null,
                'image' => $student_image,
                'student_signature' => $student_signature,
                'created_by' => Auth::id(),
                'updated_by' => Auth::id(),
                'deleted_by' => null,
                'status' => $data['status'] ?? '1', // Default to active
            ]);

            // Create guardian
            Guardian::create([
                'student_id' => $student->id,
                'father_name_bn' => $data['father_name_bn'] ?? null,
                'father_name_en' => $data['father_name_en'] ?? null,
                'father_mobile' => $data['father_mobile'] ?? null,
                'father_occupation' => $data['father_occupation'] ?? null,
                'father_organization_name' => $data['father_organization_name'] ?? null,
                'father_basic_income' => $data['father_basic_income'] ?? 0,
                'father_gross_income' => $data['father_gross_income'] ?? 0,

                'mother_name_bn' => $data['mother_name_bn'] ?? null,
                'mother_name_en' => $data['mother_name_en'] ?? null,
                'mother_mobile' => $data['mother_mobile'] ?? null,
                'mother_occupation' => $data['mother_occupation'] ?? null,
                'mother_organization_name' => $data['mother_organization_name'] ?? null,
                'mother_basic_income' => $data['mother_basic_income'] ?? 0,
                'mother_gross_income' => $data['mother_gross_income'] ?? 0,

                'guardian_signature' => $guardian_signature,
            ]);

            // Create address
            Address::create([
                'student_id' => $student->id,
                'present_village' => $data['present_village'] ?? null,
                'present_post_office' => $data['present_post_office'] ?? null,
                'present_upazila' => $data['present_upazila'] ?? null,
                'present_district' => $data['present_district'] ?? null,
                'permanent_village' => $data['permanent_village'] ?? null,
                'permanent_post_office' => $data['permanent_post_office'] ?? null,
                'permanent_upazila' => $data['permanent_upazila'] ?? null,
                'permanent_district' => $data['permanent_district'] ?? null,
            ]);

            DB::commit();

            return redirect()->route('admin.admission.students.index')->with('success', 'Student admission submitted successfully!');
        } catch (\Exception $e) {

            dd($e->getMessage());
            DB::rollback();
            return back()->withInput()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()]);
        }
    }
    public function edit(Student $student)
    {
        $student->load(['guardian', 'address']);
        return view('backend.students.admission.edit', compact('student'));
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $data = $request->validated();

        // Handle student image
        if ($request->hasFile('student_image')) {
            if ($student->image) {
                Storage::disk('public')->delete($student->image);
            }
            $data['image'] = $request->file('student_image')->store('students/image', 'public');
        }

        // Handle student signature
        if ($request->hasFile('student_signature')) {
            if ($student->student_signature) {
                Storage::disk('public')->delete($student->student_signature);
            }
            $data['student_signature'] = $request->file('student_signature')->store('students/signature', 'public');
        }

        $student->update([
            'name_bn' => $data['name_bn'],
            'name_en' => $data['name_en'],
            'admission_date' => $data['admission_date'],
            'birth_date' => $data['birth_date'],
            'nationality' => $data['nationality'],
            'religion' => $data['religion'],
            'blood_group' => $data['blood_group'] ?? null,
            'image' => $data['image'] ?? $student->image,
            'student_signature' => $data['student_signature'] ?? $student->student_signature,
            'updated_by' => Auth::id(),
            'status' => $data['status'] ?? '1', // Default to active
        ]);

        // Update guardian
        $student->guardian->update([
            'father_name_bn' => $data['father_name_bn'],
            'father_name_en' => $data['father_name_en'],
            'father_mobile' => $data['father_mobile'],
            'father_occupation' => $data['father_occupation'],
            'father_basic_income' => $data['father_basic_income'],
            'father_gross_income' => $data['father_gross_income'],
            'mother_name_bn' => $data['mother_name_bn'],
            'mother_name_en' => $data['mother_name_en'],
            'mother_mobile' => $data['mother_mobile'],
            'mother_occupation' => $data['mother_occupation'],
            'mother_basic_income' => $data['mother_basic_income'],
            'mother_gross_income' => $data['mother_gross_income'],
        ]);

        // Handle guardian signature
        if ($request->hasFile('guardian_signature')) {
            if ($student->guardian->guardian_signature) {
                Storage::disk('public')->delete($student->guardian->guardian_signature);
            }
            $student->guardian->update([
                'guardian_signature' => $request->file('guardian_signature')->store('students/guardian/signature', 'public')
            ]);
        }

        // Update address
        $student->address->update([
            'present_village' => $data['present_village'],
            'present_post_office' => $data['present_post_office'],
            'present_upazila' => $data['present_upazila'],
            'present_district' => $data['present_district'],
            'permanent_village' => $data['permanent_village'],
            'permanent_post_office' => $data['permanent_post_office'],
            'permanent_upazila' => $data['permanent_upazila'],
            'permanent_district' => $data['permanent_district'],
        ]);

        return redirect()->route('admin.admission.students.index')->with('success', 'Student updated successfully!');
    }

    public function show($id)
    {
        try {
            $student = Student::with('guardian', 'address')->findOrFail($id);
            return view('backend.students.admission.show', compact('student'));
        } catch (\Exception $e) {
            return redirect()->route('students.index')->with('error', 'Error retrieving student details: ' . $e->getMessage());
        }
    }

    public function destroy(Student $student)
    {
        $student->update(['deleted_by' => Auth::id(), 'status' => '2']); // Mark as deleted
        $student->delete();
        return redirect()->route('admin.admission.students.index')->with('success', 'Admission Student deleted successfully!');
    }
}
