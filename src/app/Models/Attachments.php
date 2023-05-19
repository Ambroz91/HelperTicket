<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property Ticket
 * @property Replies
 */
class Attachments extends Model
{
    use HasFactory;

    public function attachmentTicket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }

    public function attachmentReplies(): BelongsTo
    {
        return $this->belongsTo(Replies::class);
    }
}
