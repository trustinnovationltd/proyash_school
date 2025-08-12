<?php

namespace App\Models\Employees;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\Department;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Shift;
use App\Models\Employees\Designation;
use App\Models\User;

class Employee extends Model
{
    use SoftDeletes, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name_english',
        'name_bangla',
        'nid',
        'phone',
        'email',
        'date_of_birth',
        'blood_group',
        'religion',
        'gender',
        'joining_date',

        // Address
        'present_village',
        'present_post_office',
        'present_upazila',
        'present_district',
        'permanent_village',
        'permanent_post_office',
        'permanent_upazila',
        'permanent_district',

        // Education
        'ssc_school',
        'ssc_board',
        'ssc_year',
        'ssc_result',
        'hsc_college',
        'hsc_board',
        'hsc_year',
        'hsc_result',
        'diploma_institute',
        'diploma_subject',
        'diploma_year',
        'diploma_result',
        'bachelor_university',
        'bachelor_department',
        'bachelor_year',
        'bachelor_result',
        'masters_university',
        'masters_department',
        'masters_year',
        'masters_result',
        'other_qualification',

        // Experience
        'year_of_experience',
        'experience_information',

        // Documents
        'image',
        'signature',
        'created_by',
        'updated_by',
        'deleted_by',
        'deleted_at',  // Include this field if you want to allow soft deletes
    ];

    /**
     * Get the institute associated with the employee.
     */


    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

    /**
     * Get the department associated with the employee.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get the medium associated with the employee.
     */
    public function medium()
    {
        return $this->belongsTo(Medium::class);
    }

    /**
     * Get the shift associated with the employee.
     */
    public function shift()
    {
        return $this->belongsTo(Shift::class);
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
}
