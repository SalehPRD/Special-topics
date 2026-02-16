<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cargo extends Model
{
    protected $fillable = [
        'national_code',
        'vehicle_id',
        'cargo_code',
        'cargo_title',
        'owner_name',
        'cargo_type',
        'owner_contact',
        'weight',
        'origin',
        'destination',
        'description',
    ];

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class, 'national_code', 'national_code');
    }

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'vehicle_id');
    }
}
