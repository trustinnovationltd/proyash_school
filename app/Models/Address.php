<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory; //, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'student_id',
        'present_village',
        'present_post_office',
        'present_upazila',
        'present_district',
        'permanent_village',
        'permanent_post_office',
        'permanent_upazila',
        'permanent_district'
    ];
}
