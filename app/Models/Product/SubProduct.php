<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProduct extends Model
{
    use HasFactory;
   protected $primaryKey = 'subProdId';

    protected $fillable = [
            "subProdTitle",
            "subProdAmount",
            "subProdAmount_variation",
            "subProdMain_id",
            "subProdMain_name",
            "subProdMainCat_id",
            "subProdMainCat_name",
    ];
 }
