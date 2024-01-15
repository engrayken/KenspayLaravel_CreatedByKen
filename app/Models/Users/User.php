<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    public $incrementing = false;

        protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'status',
        'password',
        'reference'
    ];

        protected $hidden = [
        'password',
        // 'remember_token',
        // "accessToken",
        // "accessUserid",
        "status"
    ];
}
