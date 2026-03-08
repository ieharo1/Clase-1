<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Crop extends Model
{
    protected $fillable = ['name', 'species', 'growth_days', 'notes'];

    public function plants(): HasMany
    {
        return $this->hasMany(Plant::class);
    }
}
