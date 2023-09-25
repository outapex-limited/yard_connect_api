<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class AttachmentConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default user statuses to be used on the platform
        DB::table('attachment_conditions')->insert([
            'name' => 'Excellent',
            'description' => 'Excellent condition',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachment_conditions')->insert([
            'name' => 'Good',
            'description' => 'Good condition',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachment_conditions')->insert([
            'name' => 'Poor',
            'description' => 'Poor condition',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
