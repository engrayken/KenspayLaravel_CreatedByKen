<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PUser extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'token',
        'password',
        'status',
        'website',
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
