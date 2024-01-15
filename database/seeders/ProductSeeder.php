<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::updateOrcreate([
           'prodName'=>'mtn-pin',
            'prodTitle'=>'MTN PIN',
            'prodSlogan'=>'Instant Pin',
            'prodCat_id'=>'1',
            'prodCat_name'=>'pin',
      ]);
            Product::updateOrcreate([
           'prodName'=>'airtel-pin',
            'prodTitle'=>'Airtel PIN',
            'prodSlogan'=>'Instant Pin',
            'prodCat_id'=>'1',
            'prodCat_name'=>'pin',
      ]);
            Product::updateOrcreate([
           'prodName'=>'glo-pin',
            'prodTitle'=>'Glo PIN',
            'prodSlogan'=>'Instant Pin',
            'prodCat_id'=>'1',
            'prodCat_name'=>'pin',
      ]);
            Product::updateOrcreate([
           'prodName'=>'9mobile-pin',
            'prodTitle'=>'9mobile PIN',
            'prodSlogan'=>'Instant Pin',
            'prodCat_id'=>'1',
            'prodCat_name'=>'pin',
      ]);
    }
}
