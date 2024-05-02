<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MixBox extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'farm',
        'length',
        'active',
    ];

    public function priceLines(): HasMany
    {
        return $this->hasMany(MixBoxLine::class);
    }
}
