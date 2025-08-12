<?php

namespace App\Models\BasicSettings;

use Database\Factories\AcademicYearFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    use HasFactory;
    
    protected $table = 'academic_years';
    protected $guarded = [];

     protected static function newFactory()
    {
        return AcademicYearFactory::new();
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
