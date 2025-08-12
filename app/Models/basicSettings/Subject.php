<?php

namespace App\Models\BasicSettings;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
