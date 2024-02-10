<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mypin extends Model
{
    use HasFactory;
    protected $fillable = [
            "trans_id",
            "transId",
            "userId",
            "network",
            "deno",
            "amount",
            "quantity",
            "descr",
            "pin",
            "seria",
            "status",

    ];
}
