<?php

namespace App\Models\BasicSettings;

use Database\Factories\ClassesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $guarded = [];

     protected static function newFactory()
    {
        return ClassesFactory::new();
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
