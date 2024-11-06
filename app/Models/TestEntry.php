<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'signal_strength_2g',
        'signal_strength_5g',
        'speed_2g',
        'speed_5g',
        'interference',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
