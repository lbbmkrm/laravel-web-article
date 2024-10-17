<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        "slug",
        "tittle",
        "user_id",
        "category_id",
        "body"
    ];

    protected $with = ["user", "category"]; //eager loading

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function scopeFilter(Builder $query, array $filters)
    {
        // Pencarian berdasarkan title
        if ($filters['search'] ?? false) {
            $query->where('tittle', 'like', '%' . $filters['search'] . '%');
        }
    }
}
