<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryUserProgress extends Model
{
    protected $table = 'category_user_progress';

    protected $fillable = [
        'user_id',
        'category_id',
        'direction',
        'best_accuracy',
        'best_time_ms',
        'last_practiced_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
