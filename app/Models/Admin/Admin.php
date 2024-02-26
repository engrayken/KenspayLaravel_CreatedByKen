<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $filliable =[
                    "name",
                    "email",
                    "password",
                    "last_login"
    ];

        protected $hidden = [
        'password',
    ];
}
