<?php

namespace App\Enums;

enum TicketStatus:string
{
    case NEW = "new";
    case OPEN = "open";
    case PROGRESS = "in progress";
    case RESOLVED = "resolved";
    case REJECTED = "rejected";
}
