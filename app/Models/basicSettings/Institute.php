<?php

namespace App\Models\BasicSettings;

use Database\Factories\InstituteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
     use HasFactory;

    protected $table = 'institutes';
    protected $guarded = [];

    protected static function newFactory()
    {
        return InstituteFactory::new();
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
