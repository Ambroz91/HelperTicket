<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property Replies
 */
class Replies extends Model
{
    use HasFactory;

    protected $fillable = [
        'replyText',
        'attachment',
        'user_id',
        'ticket_id'
    ];
    public function replyTicket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }

    public function replyUser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
