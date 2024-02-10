<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpinLimit extends Model
{
    use HasFactory;
    protected $fillable = [
            "net",
            "deno",
            "balance",
            "limit",
    ];
}
