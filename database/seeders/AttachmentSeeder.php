<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default attachments to be used on the platform
        DB::table('attachments')->insert([
            'name' => 'Bucket',
            'industry_id' => 1,
            'category_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Auger',
            'industry_id' => 1,
            'category_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Demolition Hammer',
            'industry_id' => 1,
            'category_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Grapple',
            'industry_id' => 1,
            'category_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Concrete Pulverizer',
            'industry_id' => 1,
            'category_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Drill Bit',
            'industry_id' => 2,
            'category_ids' => '[6]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Dump Truck Body',
            'industry_id' => 2,
            'category_ids' => '[7]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Mining Shovel Bucket',
            'industry_id' => 2,
            'category_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Conveyor Belt',
            'industry_id' => 2,
            'category_ids' => '[9]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Mining Drilling Tools',
            'industry_id' => 2,
            'category_ids' => '[6]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Plow Blade',
            'industry_id' => 3,
            'category_ids' => '[12]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Combine Header',
            'industry_id' => 3,
            'category_ids' => '[11]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Baler Attachment',
            'industry_id' => 3,
            'category_ids' => '[13]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Sprayer Nozzle',
            'industry_id' => 3,
            'category_ids' => '[14]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('attachments')->insert([
            'name' => 'Tillage Attachment',
            'industry_id' => 3,
            'category_ids' => '[12]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
