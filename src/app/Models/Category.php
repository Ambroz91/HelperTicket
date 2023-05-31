<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'category'
    ];

    public function ticket(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function sluggable(): array
    {
        return [
            'category_slug' => [
                'source' => 'category',
                'onUpdate' => true,
            ]
        ];
    }
}
