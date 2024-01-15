<?php

namespace Database\Seeders;

use App\Models\Product\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Category::updateOrcreate([
        "catName"=>"pin",
        "catTitle"=>"Print Recharge Card Pin",
      ]);

        Category::updateOrcreate([
        "catName"=>"airtime",
        "catTitle"=>"Buy Airtime Vtu",
            ]);

        Category::updateOrcreate([
        "catName"=>"sme",
        "catTitle"=>"Buy internet sme data",
        ]);

        Category::updateOrcreate([
        "catName"=>"tv",
        "catTitle"=>"Pay Tv subscription",
        ]);

        Category::updateOrcreate([
        "catName"=>"education",
        "catTitle"=>"Education Payment",
        ]);

        Category::updateOrcreate([
        "catName"=>"electricity",
        "catTitle"=>"Pay electricity bill",
        ]);

    }
}
