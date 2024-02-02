<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the Sme Database seeds.
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



        Product::updateOrcreate([
           'prodName'=>'mtn',
            'prodTitle'=>'MTN Airtime',
            'prodSlogan'=>'Instant Airtime',
            'prodCat_id'=>'2',
            'prodCat_name'=>'airtime',
      ]);
            Product::updateOrcreate([
           'prodName'=>'airtel',
            'prodTitle'=>'Airtel Airtime',
            'prodSlogan'=>'Instant Airtime',
            'prodCat_id'=>'2',
            'prodCat_name'=>'airtime',
      ]);
            Product::updateOrcreate([
           'prodName'=>'glo',
            'prodTitle'=>'Glo Airtime',
            'prodSlogan'=>'Instant Airtime',
            'prodCat_id'=>'2',
            'prodCat_name'=>'airtime',
      ]);
            Product::updateOrcreate([
           'prodName'=>'9mobile',
            'prodTitle'=>'9mobile Airtime',
            'prodSlogan'=>'Instant Airtime',
            'prodCat_id'=>'2',
            'prodCat_name'=>'airtime',
      ]);

        Product::updateOrcreate([
           'prodName'=>'mtn-sme',
            'prodTitle'=>'MTN Sme Data',
            'prodSlogan'=>'Instant Sme Data',
            'prodCat_id'=>'3',
            'prodCat_name'=>'sme',
      ]);
            Product::updateOrcreate([
           'prodName'=>'airtel-sme',
            'prodTitle'=>'Airtel Sme Data',
            'prodSlogan'=>'Instant Sme Data',
            'prodCat_id'=>'3',
            'prodCat_name'=>'sme',
      ]);
            Product::updateOrcreate([
           'prodName'=>'glo-sme',
            'prodTitle'=>'Glo Sme Data',
            'prodSlogan'=>'Instant Sme Data',
            'prodCat_id'=>'3',
            'prodCat_name'=>'sme',
      ]);
            Product::updateOrcreate([
           'prodName'=>'9mobile-sme',
            'prodTitle'=>'9mobile Sme Data',
            'prodSlogan'=>'Instant Sme Data',
            'prodCat_id'=>'3',
            'prodCat_name'=>'sme',
      ]);
    }
}
