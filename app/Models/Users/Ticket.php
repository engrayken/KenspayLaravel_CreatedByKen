<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    use HasFactory;
        protected $fillable = [
                "userId",
                "subject",
                "priority",
                "message",
                "ticket_id",
                "status"
        ];

        public function User(){
        return $this->belongsTo(User::class, "userId");
    }

        public function Reply_ticket(){
        return $this->hasMany(Reply_ticket::class, "ticketId");
    }

}
