<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use App\Models\Product\SubProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        SubProduct::updateOrcreate([
           'subProdTitle'=>'MTN 100 NGN',
            'subProdAmount'=>'100',
            'subProdAmount_variation'=>'3',
            'subProdMain_id'=>'1',
            'subProdMain_name'=>'mtn-pin',
            'subProdMainCat_id'=>'1',
            'subProdMainCat_name'=>'pin',
      ]);

              SubProduct::updateOrcreate([
           'subProdTitle'=>'MTN 200 NGN',
            'subProdAmount'=>'200',
            'subProdAmount_variation'=>'3',
            'subProdMain_id'=>'1',
            'subProdMain_name'=>'mtn-pin',
            'subProdMainCat_id'=>'1',
            'subProdMainCat_name'=>'pin',
      ]);
            SubProduct::updateOrcreate([
           'subProdTitle'=>'MTN 500 NGN',
            'subProdAmount'=>'500',
            'subProdAmount_variation'=>'3',
            'subProdMain_id'=>'1',
            'subProdMain_name'=>'mtn-pin',
            'subProdMainCat_id'=>'1',
            'subProdMainCat_name'=>'pin',
      ]);
            SubProduct::updateOrcreate([
           'subProdTitle'=>'MTN 1000 NGN',
            'subProdAmount'=>'1O00',
            'subProdAmount_variation'=>'3',
            'subProdMain_id'=>'1',
            'subProdMain_name'=>'mtn-pin',
            'subProdMainCat_id'=>'1',
            'subProdMainCat_name'=>'pin',
      ]);


            SubProduct::updateOrcreate([
           'subProdTitle'=>'Airtel 100 NGN',
            'subProdAmount'=>'100',
            'subProdAmount_variation'=>'3',
            'subProdMain_id'=>'2',
            'subProdMain_name'=>'airtel-pin',
            'subProdMainCat_id'=>'1',
            'subProdMainCat_name'=>'pin',
      ]);

              SubProduct::updateOrcreate([
           'subProdTitle'=>'Airtel 200 NGN',
            'subProdAmount'=>'200',
            'subProdAmount_variation'=>'3',
            'subProdMain_id'=>'2',
            'subProdMain_name'=>'airtel-pin',
            'subProdMainCat_id'=>'1',
            'subProdMainCat_name'=>'pin',
      ]);
            SubProduct::updateOrcreate([
           'subProdTitle'=>'Airtel 500 NGN',
            'subProdAmount'=>'500',
            'subProdAmount_variation'=>'3',
            'subProdMain_id'=>'2',
            'subProdMain_name'=>'airtel-pin',
            'subProdMainCat_id'=>'1',
            'subProdMainCat_name'=>'pin',
      ]);
            SubProduct::updateOrcreate([
           'subProdTitle'=>'Airtel 1000 NGN',
            'subProdAmount'=>'1O00',
            'subProdAmount_variation'=>'3',
            'subProdMain_id'=>'2',
            'subProdMain_name'=>'airtel-pin',
            'subProdMainCat_id'=>'1',
            'subProdMainCat_name'=>'pin',
      ]);
    }
}
