<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Irrigation extends Model
{
    protected $fillable = ['plot_id', 'date', 'water_amount', 'notes'];

    public function plot(): BelongsTo
    {
        return $this->belongsTo(Plot::class);
    }
}
