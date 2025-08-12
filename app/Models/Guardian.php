<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guardian extends Model
{
    use HasFactory; //SoftDeletes

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'student_id',
        'father_name_bn',
        'father_name_en',
        'father_mobile',
        'father_occupation',
        'father_organization_name',
        'father_basic_income',
        'father_gross_income',
        'mother_name_bn',
        'mother_name_en',
        'mother_occupation',
        'mother_mobile',
        'mother_organization_name',
        'mother_basic_income',
        'mother_gross_income',
        'guardian_signature',
    ];
}
