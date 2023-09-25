<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default user categories to be used on the platform
        DB::table('categories')->insert([
            'name' => 'Excavators',
            'description' => 'Excavators are heavy construction machines used for digging and moving earth and materials. They often have a rotating platform and a bucket for digging. Includes mining excavators that are specialized excavators designed for digging and loading materials in mining environments.',
            'industry_ids' => '[1,2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Bulldozers',
            'description' => 'Bulldozers are powerful, tracked vehicles equipped with a large blade on the front used for pushing and leveling earth and debris.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Loaders (Wheel Loaders)',
            'description' => 'Loaders, also known as wheel loaders, are used for scooping, loading, and transporting materials, such as sand and gravel.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Cranes',
            'description' => 'Cranes are used for lifting and moving heavy objects on construction sites. Various types of cranes include tower cranes, mobile cranes, and overhead cranes.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Backhoes',
            'description' => 'Backhoes are versatile machines that combine the capabilities of excavators and loaders, commonly used for digging and moving materials.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Mining Drills',
            'description' => 'Mining drills are used for creating holes in the ground for blasting or extracting minerals. They can be surface drills or underground drills.',
            'industry_ids' => '[2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Haul Trucks',
            'description' => 'Haul trucks, often enormous in size, transport mined materials from the mining site to processing or storage areas.',
            'industry_ids' => '[2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Crushers and Crushing',
            'description' => 'Crushers are used to break down large rocks and ores into smaller pieces for further processing in the mining industry.',
            'industry_ids' => '[2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Conveyors',
            'description' => 'Conveyors are used to transport bulk materials, such as ore and coal, within mining operations efficiently.',
            'industry_ids' => '[2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Tractors',
            'description' => 'Tractors are versatile agricultural vehicles used for plowing, planting, and various other farming tasks.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Combine Harvesters',
            'description' => 'Combine harvesters are used to harvest, thresh, and clean crops like wheat, corn, and soybeans in a single pass.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Plows and Tillage Equipment',
            'description' => 'Plows and tillage equipment are used for preparing soil for planting by breaking it up and mixing in organic matter.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Harvesting and Forage Equipment',
            'description' => 'This category includes equipment like balers, forage harvesters, and hay rakes used for collecting and processing crops.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Sprayers and Spreaders',
            'description' => 'Sprayers and spreaders are used for applying pesticides, fertilizers, and other agricultural chemicals.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
