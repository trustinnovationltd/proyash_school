<?php

namespace App\Models\Exams;

use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\AcademicYear;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Shift;
use App\Models\BasicSettings\Classes;
use App\Models\BasicSettings\Department;
use App\Models\BasicSettings\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExamMarkSetup extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'exam_marks_setups'; // Table name

    // Mass assignable attributes
    protected $fillable = [
        'institute_id',
        'academic_year_id',
        'medium_id',
        'shift_id',
        'class_id',
        'department_id',
        'subject_id',
        'written_exam_mark',
        'written_exam_pass_mark',
        'mcq_exam_mark',
        'mcq_exam_pass_mark',
        'practical_mark',
        'class_test_mark',
        'monthly_test_mark',
        'total_mark',
        'converted_in',
        'total_pass_mark',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    // Defining the relationships
    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function medium()
    {
        return $this->belongsTo(Medium::class);
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

    public function classes()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    // Optionally, you can define accessors or mutators for custom fields here if needed.
}
