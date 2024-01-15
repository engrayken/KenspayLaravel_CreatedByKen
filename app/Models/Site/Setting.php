<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
         protected $fillable = [
            'siteName',
            'phone',
            'email',
            'ehost',
            'siteName',
            'epass',
            'bankFee',
            'monthlyCharge',
            'limit',
            'monifySecret',
            'monifyProductCode',
            'monifyContractCode',
            'payStackPublic',
            'payStackPrivate',
            'GsiteKey',
            'GsecretKey',
            'tawkId',
    ];

}
