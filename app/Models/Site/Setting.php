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
            'epass',
            'bankFee',
            'monthlyCharge',
            'limit',
            'youtube',
            'facebook',
            'twitter',
            'instagram',
            'payStackPrivate',
            'androidApp',
            'iosApp',
            'tawkId',
            'address',
    ];

}
