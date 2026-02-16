<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vehicle extends Model
{
    protected $fillable = [
        'vehicle_id',
        'national_code',
        'name',
        'plate',
        'model',
        'cargo_type',
    ];

    public function driver(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'national_code', 'national_code');
    }
    public function cargos(): HasMany
    {
        return $this->hasMany(Cargo::class, 'vehicle_id', 'vehicle_id');
    }
}
