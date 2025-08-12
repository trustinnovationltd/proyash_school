<?php

namespace App\Models\BasicSettings;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HolidaySetting extends Model
{
    use SoftDeletes;

    protected $table = 'holiday_settings'; // Table name updated
    protected $guarded = [];

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
}
