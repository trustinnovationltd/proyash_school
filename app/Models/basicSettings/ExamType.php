<?php

namespace App\Models\BasicSettings;

use Illuminate\Database\Eloquent\Model;

class ExamType extends Model
{
    protected $table = 'exam_types';
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
