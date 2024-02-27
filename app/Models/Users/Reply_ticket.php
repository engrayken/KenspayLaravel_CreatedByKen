<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply_ticket extends Model
{
    use HasFactory;

    protected $fillable = [
            "ticketId",
            "ticket_id",
            "reply_id",
            "reply",
            "status"
    ];


}
