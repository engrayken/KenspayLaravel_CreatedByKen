<?php

namespace Database\Seeders;

use App\Enums\AdminEnums;
use App\Models\Admin\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Admin::Create([
            "name" => 'Admin',
            "email" => '',
            "password" => Hash::make(AdminEnums::$adminPsass)
        ]);

    }
}
