<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\AcademicYear;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Shift;
use App\Models\BasicSettings\Classes;
use App\Models\User;

class StudentManualAttendance extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'student_manual_attendances';

    protected $fillable = [
        'institute_id',  // Fixed typo from 'institude_id'
        'academic_year_id',
        'medium_id',
        'shift_id',
        'class_id',
        'department_id',
        'section_id',
        'school_id',
        'student_name',
        'student_roll',
        'attendance_date', // Added missing field
        'in_time',
        'out_time',
        'status',
        'remarks',       // Added missing field
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    protected $casts = [
        'attendance_date' => 'date',
        'in_time' => 'datetime',
        'out_time' => 'datetime',
        'status' => 'string'
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

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function deleter()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'present');
    }

    // Accessors
    public function getStatusTextAttribute()
    {
        return ucfirst($this->status);
    }

    public function getFullAttendanceTimeAttribute()
    {
        return $this->in_time->format('h:i A') . ' - ' . ($this->out_time ? $this->out_time->format('h:i A') : 'Not Out');
    }
}
