<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MixBoxLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'VarietyId',
    ];

    public function orderHeader(): BelongsTo
    {
        return $this->belongsTo(MixBox::class);
    }
}
