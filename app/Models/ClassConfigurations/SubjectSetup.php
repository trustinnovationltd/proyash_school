<?php

namespace App\Models\ClassConfigurations;

use App\Models\BasicSettings\Classes;
use App\Models\BasicSettings\Department;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Subject;
use Illuminate\Database\Eloquent\Model;

class SubjectSetup extends Model
{
    protected $guarded = [];
    protected $table = 'subject_setups';
    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_id');
    }

    /**
     * Relationship with the Medium model.
     */
    public function medium()
    {
        return $this->belongsTo(Medium::class, 'medium_id');
    }

    /**
     * Relationship with the Class model.
     */
    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id'); // Assuming the Class model is named "ClassModel"
    }

    /**
     * Relationship with the Department model.
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    /**
     * Relationship with the Subject model.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
