<?php

namespace App\Models\Exams;

use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\AcademicYear;
use App\Models\BasicSettings\ExamType;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Shift;
use App\Models\BasicSettings\Classes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExamSetup extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'exam_setups';

    // Fillable fields for mass assignment
    protected $fillable = [
        'institute_id',
        'academic_year_id',
        'medium_id',
        'shift_id',
        'class_id',
        'exam_type_id',
        'start_date',
        'end_date',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    // Relationships
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

    public function examType()
    {
        return $this->belongsTo(ExamType::class);
    }

    // Optionally, you can define custom attribute accessors or mutators if needed
}
