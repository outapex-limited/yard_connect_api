<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default user industries to be used on the platform
        DB::table('industries')->insert([
            'name' => 'Construction',
            'description' => 'Construction Industry',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('industries')->insert([
            'name' => 'Mining',
            'description' => 'Mining Industry',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('industries')->insert([
            'name' => 'Agriculture',
            'description' => 'Agriculture Industry',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('industries')->insert([
            'name' => 'Other',
            'description' => 'Undefined Industry',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
