<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pest extends Model
{
    protected $fillable = ['name', 'severity', 'treatment'];

    public function detections(): HasMany
    {
        return $this->hasMany(PestDetection::class);
    }
}
