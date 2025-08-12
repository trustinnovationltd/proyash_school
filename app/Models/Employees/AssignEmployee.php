<?php

namespace App\Models\Employees;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Employees\Designation;
use App\Models\User;

class AssignEmployee extends Model
{
    use SoftDeletes, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'employee_id',
        'section_id',
        'designation_id',
        'start_date',
        'end_date',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
        'deleted_at',  // Include this field if you want to allow soft deletes
    ];


    /**
     * Get the section associated with the employee.
     */
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    /**
     * Get the designation associated with the employee.
     */
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    /**
     * Get the user who created the employee.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the user who updated the employee.
     */
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * Get the user who deleted the employee.
     */
    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
