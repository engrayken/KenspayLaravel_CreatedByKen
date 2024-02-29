<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
            "userId",
            "subject",
            "text",
            "status"
             ];

        public function User(){
        return $this->belongsTo(User::class, "userId"); }
}
