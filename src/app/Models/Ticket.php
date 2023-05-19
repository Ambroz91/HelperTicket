<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'title',
        'description',
        'attachment',
        'status',
        'user_id',
        'repliadble'
    ];
    public function user(){
        $this->belongsTo(User::class);
    }
    public function sluggable(): array
    {
        return [
          'slug' => [
              'source' => 'title'
          ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($model){
            $model->user_id = auth()->id();
        });
    }

    public function allReplies()
    {
        return $this->morphMany(Replies::class, 'repliadble');
    }
}
