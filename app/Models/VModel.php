<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VModel extends Model
{
    use HasFactory;

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function trademark(): BelongsTo
    {
        return $this->belongsTo(Trademark::class);
    }

}

