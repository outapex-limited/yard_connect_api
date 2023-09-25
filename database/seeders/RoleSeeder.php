<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default roles to be used on the platform
        DB::table('roles')->insert([
            'name' => 'Lessee',
            'description' => 'Lessee role type',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Merchant',
            'description' => 'Merchant role type',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Customer Service',
            'description' => 'Customer Service role type',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description' => 'Admin role type',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Developer',
            'description' => 'Developer role type',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
