<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default user sub_categories to be used on the platform
        DB::table('sub_categories')->insert([
            'name' => 'Mini Excavators',
            'description' => 'Smaller, compact excavators suitable for tight spaces and smaller excavation tasks.',
            'category_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => ' Hydraulic Excavators',
            'description' => ' Excavators that use hydraulic systems for efficient digging and lifting operations.',
            'category_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Crawler Excavators',
            'description' => 'Excavators equipped with tracks for stability and mobility in challenging terrain.',
            'category_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => ' Wheeled Excavators',
            'description' => 'Excavators with wheels for improved mobility on roads and softer ground.',
            'category_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Crawler Bulldozers',
            'description' => ' Bulldozers with tracks for better traction and stability, ideal for heavy earthmoving.',
            'category_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Wheeled Bulldozers',
            'description' => 'Bulldozers with wheels suitable for lighter earthmoving tasks and road construction.',
            'category_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Skid Steer Loaders',
            'description' => 'Compact loaders with a tight turning radius, suitable for confined spaces.',
            'category_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Backhoe Loaders',
            'description' => 'Versatile machines combining loader and backhoe capabilities for various tasks.',
            'category_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Compact Wheel Loaders',
            'description' => 'Smaller wheel loaders designed for maneuverability and material handling.',
            'category_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Tower Cranes',
            'description' => 'Tall cranes used in construction to lift heavy materials and equipment to great heights.',
            'category_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Mobile Cranes',
            'description' => 'Crane models mounted on wheels or tracks, offering mobility on construction sites.',
            'category_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Crawler Cranes',
            'description' => 'Cranes with caterpillar tracks for stability and heavy lifting in challenging terrains.',
            'category_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Rough Terrain Cranes',
            'description' => 'Cranes designed for off-road use, often in rough and uneven terrains.',
            'category_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Tractor Loader Backhoes (TLBs)',
            'description' => 'Multi-purpose machines with a loader in the front and a backhoe in the rear.',
            'category_id' => 5,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Mini Backhoes',
            'description' => 'Compact backhoes suitable for smaller excavation and trenching tasks.',
            'category_id' => 5,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
