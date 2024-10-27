<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class EquipmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default user statuses to be used on the platform
        DB::table('equipment_statuses')->insert([
            'name' => 'Available',
            'description' => 'Equipment available',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('equipment_statuses')->insert([
            'name' => 'Leased Out',
            'description' => 'Equipment leased out',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('equipment_statuses')->insert([
            'name' => 'Sold',
            'description' => 'Equipment sold',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('equipment_statuses')->insert([
            'name' => 'Unavailable',
            'description' => 'Equipment unavailable',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
