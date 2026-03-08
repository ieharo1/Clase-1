<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plot extends Model
{
    protected $fillable = ['name', 'area', 'location', 'description'];

    public function plants(): HasMany
    {
        return $this->hasMany(Plant::class);
    }

    public function irrigations(): HasMany
    {
        return $this->hasMany(Irrigation::class);
    }

    public function fertilizerApplications(): HasMany
    {
        return $this->hasMany(FertilizerApplication::class);
    }
}
