<?php

namespace Database\Seeders;

use App\Enums\SiteEnums;
use App\Models\Site\Api;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Api::updateOrCreate([
            "type" => "other",
            "name" => "OtherService",
            "url" => "vtpass.com/api",
            "username" => "VtpassAirtime",
            "password" => "VtpassAirtime",
            "status" => 1,
            ]);

            Api::updateOrCreate([
            "type" => "airtime",
            "name" => "VtpassAirtime",
            "url" => "vtpass.com/api",
            "username" => "VtpassAirtime",
            "password" => "VtpassAirtime",
            "status" => 1,
            ]);

            Api::updateOrCreate([
            "type" => "pin",
            "name" => "KensPayPin",
            "url" => "vtpass.com/api",
            "username" => "KensPayPin",
            "password" => "KensPayPin",
            "status" => 1,
            ]);
    }
}
