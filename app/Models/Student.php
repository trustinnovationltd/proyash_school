<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\AcademicYear;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Shift;
use App\Models\BasicSettings\Classes;
use Database\Factories\StudentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name_bn',
        'name_en',
        'birth_date',
        'nationality',
        'religion',
        'admission_date',
        'admission_year',
        'image',
        'student_signature',
        'blood_group',
        'created_by',
        'updated_by',
        'deleted_by',
        'status'
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'date_of_birth' => 'date',
    ];

    /**
     * Relationship for academic year.
     */
    public function guardian()
    {
        return $this->hasOne(Guardian::class);
    }


    /**
     * Relationship for address.
     */
    public function address()
    {
        return $this->hasOne(Address::class);
    }


    /**
     * Relationship for created_by user.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Relationship for updated_by user.
     */
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * Relationship for deleted_by user.
     */
    public function deleter()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
}
