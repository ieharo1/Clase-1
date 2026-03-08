<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PestDetection extends Model
{
    protected $fillable = ['plant_id', 'pest_id', 'detection_date', 'treated', 'notes'];

    protected $casts = [
        'treated' => 'boolean',
    ];

    public function plant(): BelongsTo
    {
        return $this->belongsTo(Plant::class);
    }

    public function pest(): BelongsTo
    {
        return $this->belongsTo(Pest::class);
    }
}
