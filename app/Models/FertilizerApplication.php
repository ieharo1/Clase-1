<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FertilizerApplication extends Model
{
    protected $fillable = ['plot_id', 'fertilizer_id', 'date', 'amount', 'notes'];

    public function plot(): BelongsTo
    {
        return $this->belongsTo(Plot::class);
    }

    public function fertilizer(): BelongsTo
    {
        return $this->belongsTo(Fertilizer::class);
    }
}
