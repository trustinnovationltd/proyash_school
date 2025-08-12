<?php

namespace App\Models\BasicSettings;

use Database\Factories\MediumFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medium extends Model
{
    use HasFactory;

    protected $table = 'mediums';
    protected $guarded = [];

     protected static function newFactory()
    {
        return MediumFactory::new();
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
