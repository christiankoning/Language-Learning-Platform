<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimedAttempt extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'direction',
        'correct',
        'missed',
        'time_ms',
        'finished_at',
    ];
}
