<?php

namespace App\Models\Leaves;

use App\Models\BasicSettings\Institute;
use App\Models\Employees\Employee;
use App\Models\Employees\Designation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class EmployeeLeaveApplication extends Model
{
    use SoftDeletes;

    // Define the table name
    protected $table = 'employee_leave_applications';

    // Mass assignable attributes
    protected $fillable = [
        'institute_id',
        'designation_id',
        'employee_id',
        'leave_type',
        'pay_type',
        'leave_application_date',
        'leave_from',
        'leave_to',
        'leave_reason',
        'emergency_contact_number',
        'approved_date_from',
        'approved_date_to',
        'approved_by',
        'responsible_employee_during_leave',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    // Constants for status
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    // Define date columns to be automatically cast to Carbon instances
    protected $dates = [
        'leave_from',
        'leave_to',
        'approved_date_from',
        'approved_date_to',
        'leave_application_date'
    ];

    /**
     * Get the leave_from attribute as a formatted date (Y-m-d).
     */
    public function getLeaveFromAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * Get the leave_to attribute as a formatted date (Y-m-d).
     */
    public function getLeaveToAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * Get the approved_date_from attribute as a formatted date (Y-m-d).
     */
    public function getApprovedDateFromAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * Get the approved_date_to attribute as a formatted date (Y-m-d).
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
        return $this->belongsTo(Institute::class);
    }

    /**
     * Get the designation associated with the leave application.
     */
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    /**
     * Get the employee associated with the leave application.
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    /**
     * Scope to get only active leave applications.
     */
    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    /**
     * Scope to get only inactive leave applications.
     */
    public function scopeInactive($query)
    {
        return $query->where('status', self::STATUS_INACTIVE);
    }
}
