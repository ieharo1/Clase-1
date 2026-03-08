<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plant extends Model
{
    protected $fillable = ['plot_id', 'crop_id', 'planting_date', 'expected_harvest_date', 'harvest_date', 'status', 'health', 'notes'];

    public function plot(): BelongsTo
    {
        return $this->belongsTo(Plot::class);
    }

    public function crop(): BelongsTo
    {
        return $this->belongsTo(Crop::class);
    }

    public function pestDetections(): HasMany
    {
        return $this->hasMany(PestDetection::class);
    }
}
