<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEmailVerify extends Model
{
    use HasFactory;
    protected $fillable = [
            "userId",
            "userEmail",
            "token",
    ];
}