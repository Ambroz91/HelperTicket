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

    public function replyTicket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }
}
