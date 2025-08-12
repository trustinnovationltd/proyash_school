<?php

namespace App\Models\BasicSettings;

use Database\Factories\DepartmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $guarded = [];

    protected static function newFactory()
    {
        return DepartmentFactory::new(); // Manually link the factory
    }


    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
