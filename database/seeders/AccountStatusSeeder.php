<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class AccountStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default user statuses to be used on the platform
        DB::table('account_statuses')->insert([
            'name' => 'Active',
            'description' => 'Users with active account status',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('account_statuses')->insert([
            'name' => 'Inactive',
            'description' => 'Users with inactive account status',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('account_statuses')->insert([
            'name' => 'Suspended',
            'description' => 'Users with suspended account status',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
