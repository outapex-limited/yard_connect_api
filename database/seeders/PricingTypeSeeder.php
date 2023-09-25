<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class PricingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default user genders to be used on the platform
        DB::table('pricing_types')->insert([
            'name' => 'Hourly',
            'description' => 'Hourly pricing',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('pricing_types')->insert([
            'name' => 'Hectar',
            'description' => 'Hectar pricing',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
