<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default user genders to be used on the platform
        DB::table('genders')->insert([
            'name' => 'Female',
            'description' => 'Users of the female gender',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('genders')->insert([
            'name' => 'Male',
            'description' => 'Users of the male gender',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('genders')->insert([
            'name' => 'Other',
            'description' => 'Users of the other gender',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
