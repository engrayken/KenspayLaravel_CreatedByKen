<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
            "prodName",
            "prodTitle",
            "prodSlogan",
            "prodCat_id",
            "prodCat_name",
    ];
}
