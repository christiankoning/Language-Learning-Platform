<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PracticeLog extends Model
{
    protected $fillable = [
        'user_id', 'language_id', 'category_id', 'direction', 'correct', 'missed', 'accuracy'
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
