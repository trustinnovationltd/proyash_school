<?php

namespace App\Models\BasicSettings;

use Database\Factories\ShiftFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

     protected static function newFactory()
    {
        return ShiftFactory::new();
    }
    
    protected $table = 'shifts';
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
