<?php

namespace App\Models\ClassConfigurations;

use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\AcademicYear;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Shift;
use App\Models\BasicSettings\Classes;
use App\Models\BasicSettings\Department;
use Illuminate\Database\Eloquent\Model;

class SectionSetup extends Model
{
    protected $guarded = [];
    protected $table = 'section_setups';

    /**
     * Relationship with the Institute model.
     */
    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_id');
    }

    /**
     * Relationship with the AcademicYear model.
     */
    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_id');
    }

    /**
     * Relationship with the Medium model.
     */
    public function medium()
    {
        return $this->belongsTo(Medium::class, 'medium_id');
    }

    /**
     * Relationship with the Shift model.
     */
    public function shift()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }

    /**
     * Relationship with the Class model.
     */
    public function classRelation()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }

    /**
     * Relationship with the Department model.
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
