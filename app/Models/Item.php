<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'prompt',
        'answer',
        'romaji',
        'type',
        'extra_data',
        'direction',
    ];

    protected $casts = [
        'extra_data' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
