<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpage extends Model
{
    use HasFactory;
    protected $fillable = [
            "status",
            "type",
            "message",
    ];
}
