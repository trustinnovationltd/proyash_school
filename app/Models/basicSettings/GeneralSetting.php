<?php

namespace App\Models\BasicSettings;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GeneralSetting extends Model
{
    use SoftDeletes;

    protected $table = 'general_settings';

    // Use $fillable for mass assignment protection
    protected $fillable = [
        'institute_id', 
        'present_sms', 
        'leave_sms', 
        'absent_sms', 
        'fee_collection_sms', 
        'admission_greeting_sms', 
        'birthday_sms', 
        'student_id_automatic', 
        'created_by',
        'updated_by',
        'deleted_by'
    ];

  
    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }


    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    /**
     * Cast boolean fields for better handling.
     */
    protected $casts = [
        'present_sms' => 'boolean',
        'leave_sms' => 'boolean',
        'absent_sms' => 'boolean',
        'fee_collection_sms' => 'boolean',
        'admission_greeting_sms' => 'boolean',
        'birthday_sms' => 'boolean',
        'student_id_automatic' => 'boolean',
    ];
}
