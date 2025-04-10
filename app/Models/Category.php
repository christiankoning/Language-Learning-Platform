<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['language_id', 'name', 'slug', 'description'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_categories')->withTimestamps()->withPivot('started_at');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
