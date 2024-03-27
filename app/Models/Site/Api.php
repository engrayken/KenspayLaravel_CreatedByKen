<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;
    protected $fillable = [
            "id",
            "type",
            "name",
            "url",
            "username",
            "password",
            "status",
    ];
}
