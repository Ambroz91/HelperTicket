<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'replyText' => $this->replyText,
            'attachment' => $this->attachment,
            'user_id' => $this->user_id,
            'ticket_id' => $this->ticket_id,
        ];
    }
}
