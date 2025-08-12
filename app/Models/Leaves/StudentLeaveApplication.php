<?php

namespace App\Models\Leaves;

use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\AcademicYear;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Shift;
use App\Models\BasicSettings\Classes;
use App\Models\BasicSettings\Department;
use App\Models\ClassConfigurations\SectionSetup;
use App\Models\Students\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use Carbon\Carbon;

class StudentLeaveApplication extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'student_leave_applications';

    protected $fillable = [
        'institute_id',
        'academic_year_id',
        'medium_id',
        'shift_id',
        'class_id',
        'department_id',
        'section_setup_id',
        'student_id',
        'leave_type',
        'leave_application_date',
        'leave_from',
        'leave_to',
        'leave_reason',
        'emergency_contact_number',
        'approved_date_from',
        'approved_date_to',
        'approved_by',
        'status',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    // Define date columns to be automatically cast to Carbon instances
    protected $dates = [
        'leave_from',
        'leave_to',
        'approved_date_from',
        'approved_date_to',
        'leave_application_date'
    ];

    /**
     * Accessor for leave_from attribute
     */
    public function getLeaveFromAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * Accessor for leave_to attribute
     */
    public function getLeaveToAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * Accessor for approved_date_from attribute
     */
    public function getApprovedDateFromAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * Accessor for approved_date_to attribute
     */
    public function getApprovedDateToAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * Get the institute associated with the leave application.
     */
    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_id');
    }

    /**
     * Get the academic year associated with the leave application.
     */
    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }

    /**
     * Get the medium associated with the leave application.
     */
    public function medium()
    {
        return $this->belongsTo(Medium::class, 'medium_id');
    }

    /**
     * Get the shift associated with the leave application.
     */
    public function shift()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }

    /**
     * Get the class associated with the leave application.
     */
    public function class() // Renamed for clarity
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }

    /**
     * Get the department associated with the leave application.
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    /**
     * Get the section associated with the leave application.
     */
    public function section()
    {
        return $this->belongsTo(SectionSetup::class, 'section_setup_id');
    }

    /**
     * Get the student associated with the leave application.
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    /**
     * Get the user who approved the leave.
     */
    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    /**
     * Get the user who created the leave application.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the user who updated the leave application.
     */
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * Get the user who deleted the leave application.
     */
    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

}
