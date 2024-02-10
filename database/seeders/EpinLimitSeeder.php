<?php

namespace Database\Seeders;

use App\Models\Site\EpinLimit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EpinLimitSeeder extends Seeder
{
    /**
     * Run the Sme Database seeds.
     */
    public function run(): void
    {
        EpinLimit::updateOrcreate([
            'net'=>'mtn-',
            'deno'=>'100',
            'balance'=>'1000',
            'limit'=>'10',
      ]);

    }
}
