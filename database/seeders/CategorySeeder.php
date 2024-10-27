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
            'name' => 'Compactor',
            'description' => 'Compactors are heavy construction machines used to compress and flatten various types of materials such as soil, gravel, asphalt, or concrete.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Compressor',
            'description' => 'A compressor is a mechanical device designed to increase the pressure of a gas by reducing its volume.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Conveyor',
            'description' => 'Conveyors are used to transport bulk materials, such as ore and coal, within mining operations efficiently.',
            'industry_ids' => '[2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Concrete Saw',
            'description' => 'A concrete saw is a power tool or machine designed specifically for cutting through concrete, asphalt, masonry, or other hard materials.',
            'industry_ids' => '[1,2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Crane',
            'description' => 'Cranes are used for lifting and moving heavy objects on construction sites. Various types of cranes include tower cranes, mobile cranes, and overhead cranes.',
            'industry_ids' => '[1,2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Crawler Carrier',
            'description' => 'A crawler carrier, also known as a crawler transporter or crawler hauler, is a specialized type of off-road vehicle designed for transporting heavy loads across rough, challenging terrain. ',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Crusher',
            'description' => 'Crushers are used to break down large rocks and ores into smaller pieces for further processing in the mining industry.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Dozer',
            'description' => 'Dozers are powerful, tracked vehicles equipped with a large blade on the front used for pushing and leveling earth and debris.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Drill',
            'description' => 'Drills are used for creating holes in the ground for blasting or extracting minerals. They can be surface drills or underground drills.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Excavator',
            'description' => 'Excavators are heavy construction machines used for digging and moving earth and materials. They often have a rotating platform and a bucket for digging. Includes mining excavators that are specialized excavators designed for digging and loading materials in mining environments.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Grinder',
            'description' => 'A grinder is a versatile tool used for various cutting, grinding, and polishing tasks across different industries.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Harvester',
            'description' => 'Harvesters are used to harvest crops like wheat, corn, and soybeans in a single pass.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Loader',
            'description' => 'Loaders are used for scooping, loading, and transporting materials, such as sand and gravel.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Man Lift',
            'description' => 'A man lift, also known as an aerial work platform (AWP) or personnel lift, is a type of lifting equipment designed to elevate workers to elevated areas for tasks such as maintenance, repair, installation, and construction work.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Mower',
            'description' => 'A mower is a machine used for cutting grass or other vegetation to maintain lawns, fields, parks, and other outdoor spaces',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Mulcher',
            'description' => 'A mulcher is a specialized machine used in landscaping, forestry, agriculture, and land clearing operations to shred and grind vegetation, such as trees, shrubs, branches, and brush, into smaller pieces or mulch',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Paver',
            'description' => 'Pavers are specialized machines or tools used in construction projects to lay and compact various types of paving materials, such as concrete, asphalt, or interlocking bricks, to create flat and durable surfaces like roads, sidewalks, driveways, or patios. ',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Piledriver',
            'description' => 'A piledriver is a heavy construction machine used for driving piles into the ground to provide foundational support for structures such as buildings, bridges, or offshore platforms.',
            'industry_ids' => '[1,2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Pipelayer',
            'description' => 'A pipelayer is a specialized construction machine used primarily in pipeline construction projects to lay and install pipes for various purposes, such as water, sewer, gas, or oil pipelines. ',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Plow & Tillage',
            'description' => 'Plows and tillage equipment are used for preparing soil for planting by breaking it up and mixing in organic matter.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Pump',
            'description' => 'A pump is a mechanical device used to move fluids (liquids or gases) from one place to another by creating a flow or pressure difference.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Scraper',
            'description' => 'A scraper is a heavy construction machine used for earthmoving tasks, particularly for moving large quantities of soil, sand, or other loose materials over short to medium distances.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Screener',
            'description' => 'A screener, also known as a screening machine or vibrating screen, is a mechanical device used to separate and classify particles or materials based on their size, shape, and composition.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Side x Side',
            'description' => 'A side-by-side, often referred to as a utility task vehicle (UTV) or recreational off-highway vehicle (ROV), is a small, multi-passenger vehicle designed for off-road use.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Sprayer and Spreader',
            'description' => 'Sprayers and spreaders are used for applying pesticides, fertilizers, and other agricultural chemicals.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Telehandler',
            'description' => 'A telehandler is a versatile and multifunctional lifting machine commonly used in construction, agriculture, and various industrial applications.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Tractor',
            'description' => 'Tractors are versatile agricultural vehicles used for plowing, planting, and various other farming tasks.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Trencher',
            'description' => 'A trencher is a specialized construction machine used for excavating trenches, typically for installing underground utilities such as pipelines, cables, or drainage systems. ',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Truck',
            'description' => 'Trucks, often enormous in size, transport mined materials from the mining site to processing or storage areas.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Wagon',
            'description' => 'A wagon is a four-wheeled vehicle with an open bed, often pulled by vehilces',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Wood Chipper',
            'description' => 'A wood chipper is a powerful machine used to process wood into smaller, more manageable pieces called wood chips or mulch',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
