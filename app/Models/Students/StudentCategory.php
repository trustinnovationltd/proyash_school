<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Model;

class StudentCategory extends Model
{
    protected $table = 'student_categories';
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
