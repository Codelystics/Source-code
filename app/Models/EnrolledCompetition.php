<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EnrolledCompetition extends Model
{
    use HasFactory;
    public function competitions(): BelongsTo
    {
        return $this->belongsTo(Competition::class);
    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
