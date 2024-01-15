<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
            "userId",
            "userName",
            "transId",
            "network",
            "amount",
            "deno",
            "quantity",
            "phone",
            "billersCode",
            "requestId",
            "balBefore",
            "balAfter",
            "status",
            "rstatus",
    ];
}
