<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceFee extends Model
{
    use HasFactory;
    protected $fillable = [

            "userId",
            "feeId",
            "userName",
            "amount",
    ];
}
