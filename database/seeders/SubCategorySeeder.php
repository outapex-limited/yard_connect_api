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
            'name' => 'Vibratory Plate',
            'description' => 'Vibratory Plate Compactors are small, handheld or walk-behind machines with a vibrating plate at the bottom. They are commonly used for compacting granular soils, gravel, and asphalt in small to medium-sized areas.',
            'category_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Tamping Rammer (Jumping Jack)',
            'description' => 'Tamping Rammers, also known as Jumping Jacks, have a large foot at the bottom that jumps or "rams" up and down rapidly, compacting soil or other materials. They are often used for compacting cohesive soils in confined spaces or trenches.',
            'category_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Smooth Drum Roller',
            'description' => 'Smooth Drum Rollers feature a large, smooth drum that rolls over the surface to compact soil, gravel, or asphalt. They come in different sizes and can be static (non-vibrating) or vibratory, depending on the application.',
            'category_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Padfoot Drum Roller',
            'description' => 'Padfoot Drum Rollers have a drum with protruding "feet" or pads. These are used for compacting cohesive soils such as clay, where the pads help knead and compact the material effectively.',
            'category_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Pneumatic Roller',
            'description' => 'Pneumatic Rollers have rubber tires instead of steel drums. They are filled with air and can be ballasted with water or sand to increase weight. Pneumatic rollers are effective for compacting asphalt pavement layers and achieving a smooth finish.',
            'category_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Sheepsfoot Roller',
            'description' => 'Sheepsfoot Rollers have cylindrical drums with protruding round or rectangular "feet." They are commonly used for compacting cohesive soils like clay and silt, providing kneading action to achieve higher compaction densities.',
            'category_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Tandem Vibratory Roller',
            'description' => 'Tandem Vibratory Rollers have two smooth or padfoot drums that vibrate to achieve higher compaction densities. They are typically used for larger-scale compaction of soil and asphalt in road construction and large parking lots.',
            'category_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Reciprocating',
            'description' => 'Reciprocating compressors, also known as piston compressors, use pistons driven by a crankshaft to compress air. They are widely used in construction, mining, and agricultural industries for tasks such as powering pneumatic tools, inflating tires, and operating irrigation systems.',
            'category_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Rotary Screw',
            'description' => 'Rotary screw compressors use two interlocking helical screws to compress air. Known for their reliability and efficiency, they are commonly used in construction and agricultural industries for tasks such as powering jackhammers and pneumatic drills.',
            'category_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Centrifugal',
            'description' => 'Centrifugal compressors use high-speed rotating impellers to compress air. They are commonly used in large-scale construction projects and mining operations for tasks like pneumatic conveying, powering drilling rigs, and supplying compressed air to pneumatic machinery.',
            'category_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Scroll',
            'description' => 'Scroll compressors use two spiral-shaped scrolls to compress air. They are often used in smaller construction and agricultural applications where a compact and lightweight compressor is needed, such as powering air tools and inflating tires.',
            'category_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Axial',
            'description' => 'Axial compressors use a series of rotating airfoils to compress air in a continuous flow. While more commonly found in aerospace and industrial applications, they may be used in large-scale construction projects or mining operations where high volumes of compressed air are required.',
            'category_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Portable',
            'description' => 'Portable compressors are typically reciprocating or rotary screw compressors mounted on trailers or skids for easy transportation to various job sites. They are extensively used in construction, agriculture, and mining for tasks such as powering pneumatic tools, sandblasting, and providing compressed air for ventilation and cooling systems.',
            'category_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Oil-Free',
            'description' => 'Oil-free compressors are designed to produce compressed air without any oil contamination. They are particularly useful in industries where oil contamination could damage equipment or compromise product quality, such as food processing, pharmaceuticals, and cleanroom environments in construction or mining.',
            'category_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'High-pressure',
            'description' => 'High-pressure compressors are specifically designed to deliver compressed air at higher pressures, making them suitable for specialized applications in construction, mining, and agriculture, such as deep well drilling, high-pressure air blasting, and powering high-pressure pneumatic tools.',
            'category_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Belt',
            'description' => 'Belt conveyors are the most commonly used type of conveyor in mining operations. They consist of a continuous loop of material, typically made of rubber or fabric, running over two or more pulleys. Belt conveyors are versatile and can transport a wide range of materials over long distances at high capacities.',
            'category_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Screw',
            'description' => 'Screw conveyors, also known as auger conveyors, consist of a helical screw rotating within a trough or tube. They are used to move granular or powdered materials horizontally or at a slight incline. Screw conveyors are often used for transporting bulk materials such as coal, minerals, and grains in mining operations.',
            'category_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Bucket Elevators',
            'description' => 'Bucket elevators consist of buckets attached to a rotating belt or chain. They are used to vertically lift bulk materials, such as ore, coal, and aggregate, from one level to another. Bucket elevators are commonly used in mining facilities for tasks such as transferring materials between different processing stages or loading materials into storage bins.',
            'category_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Drag Chain',
            'description' => 'Drag chain conveyors consist of a series of interconnected chain links that drag material along a fixed path. They are often used for handling bulk materials in harsh environments, such as abrasive or high-temperature conditions. Drag chain conveyors are suitable for transporting heavy materials such as coal, ash, and ore in mining operations.',
            'category_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Overland',
            'description' => 'Overland conveyors are used to transport bulk materials over long distances, typically over terrain or across challenging landscapes. They are often used in open-pit mines to transport mined ore from the excavation site to processing plants or storage facilities. Overland conveyors can be powered by motors or rely on gravity for operation.',
            'category_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Pipe',
            'description' => 'Pipe conveyors consist of a closed conveyor belt enclosed in a tubular structure. They are designed to minimize spillage and environmental impact while transporting bulk materials over long distances. Pipe conveyors are commonly used in mining applications where containment of dust or environmental considerations are important.',
            'category_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Cable Belt',
            'description' => 'Cable belt conveyors consist of a continuous loop of steel cables running over pulleys. They are used to transport bulk materials over long distances and steep inclines. Cable belt conveyors offer high capacities and are suitable for transporting materials such as coal and ore in mining operations.',
            'category_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Mobile',
            'description' => 'Mobile conveyors are portable conveyor systems that can be moved or repositioned as needed. They are commonly used in mining operations for tasks such as loading and unloading trucks, stockpiling materials, and transferring materials between equipment. Mobile conveyors offer flexibility and efficiency in handling materials in various mining environments.',
            'category_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Flat/Floor',
            'description' => 'Flat saws, also known as floor saws, are used for cutting horizontal surfaces such as concrete floors, pavements, and roads. They are equipped with a circular diamond blade mounted on a walk-behind machine or a handheld saw for smaller cuts. Flat saws are versatile and commonly used in both construction and mining for various cutting applications.',
            'category_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Wall',
            'description' => 'Wall saws are designed for cutting vertical or inclined surfaces such as walls, beams, and columns. They are mounted on tracks or arms and equipped with a diamond blade capable of cutting through thick concrete structures. Wall saws are commonly used in construction for creating openings in concrete walls and mining for cutting tunnels and shafts.',
            'category_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Wire',
            'description' => 'Wire saws use a wire with diamond segments to cut through large concrete structures or irregular shapes. They are particularly useful in mining applications for cutting through rock formations, concrete foundations, and reinforced concrete structures where other saws may not be practical. Wire saws offer high precision and are capable of cutting through significant depths.',
            'category_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Handheld Cut-Off',
            'description' => 'Handheld cut-off saws, also known as cutoff saws or handheld saws, are portable and lightweight tools used for making precise cuts in concrete, asphalt, and masonry. They are commonly used in construction for tasks such as cutting expansion joints, removing damaged sections of pavement, and trimming concrete edges.',
            'category_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Ring',
            'description' => 'Ring saws are compact, handheld saws equipped with a circular blade that rotates around a central hub. They are ideal for making deep, precise cuts in concrete, stone, and masonry. Ring saws are commonly used in construction and mining for tasks such as cutting openings for windows, doors, and ventilation shafts in concrete walls and floors.',
            'category_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Chain',
            'description' => 'Chain saws are equipped with a chain with diamond segments and are used for cutting through concrete, stone, and masonry. They are commonly used in mining for cutting through rock formations, concrete walls, and foundations. Chain saws offer high cutting speeds and are capable of cutting through hard materials with ease.',
            'category_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Walk-Behind',
            'description' => 'Walk-behind saws are heavy-duty machines equipped with a large circular blade and are used for cutting through concrete pavements, roads, and slabs. They are commonly used in construction and mining for cutting trenches, expansion joints, and large concrete structures.',
            'category_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Diamond Wire',
            'description' => 'Diamond wire saws use a wire with diamond beads for cutting through concrete, rock, and other hard materials. They are commonly used in mining for cutting through large rock formations, concrete walls, and foundations. Diamond wire saws offer high cutting speeds and are capable of cutting through thick materials with precision.',
            'category_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Tower',
            'description' => 'Tower cranes are tall, fixed cranes typically seen at construction sites. They are used for lifting and moving heavy materials and equipment vertically and horizontally across the construction site. Tower cranes have a long horizontal jib with a lifting hook or grab attached to it, which can be raised and lowered using cables and a trolley.',
            'category_id' => 5,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Mobile',
            'description' => 'Mobile cranes are versatile cranes mounted on wheeled or tracked vehicles, allowing them to be easily moved around construction sites. They come in various configurations such as truck-mounted, rough-terrain, all-terrain, and crawler cranes. Mobile cranes are used for lifting and placing heavy loads in both construction and mining operations.',
            'category_id' => 5,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Crawler',
            'description' => 'Crawler cranes are mounted on crawler tracks instead of wheels, providing stability and mobility on uneven terrain. They are commonly used in mining operations for tasks such as lifting heavy equipment, components, and materials in challenging environments. Crawler cranes offer high lifting capacities and are suitable for heavy-duty applications.',
            'category_id' => 5,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Overhead',
            'description' => 'Overhead cranes, also known as bridge cranes or gantry cranes, are fixed to a runway beam installed on the ceiling or elevated structure. They are used for lifting and moving heavy loads horizontally within a defined area. Overhead cranes are commonly used in manufacturing facilities, warehouses, and mining operations for material handling tasks.',
            'category_id' => 5,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Telescopic',
            'description' => 'Telescopic cranes, also referred to as boom trucks or hydraulic truck cranes, feature a telescoping boom that can extend or retract to reach varying heights and distances. They are mounted on trucks and commonly used in construction for tasks such as lifting and positioning materials, equipment, and structural components.',
            'category_id' => 5,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Loader',
            'description' => 'Loader cranes are hydraulic cranes mounted on trucks or trailers equipped with a loading platform. They are used for lifting and loading heavy materials onto trucks, transporting them to construction sites, and unloading them as needed. Loader cranes are commonly used in construction and mining for material handling tasks.',
            'category_id' => 5,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Floating',
            'description' => 'Floating cranes are specialized cranes mounted on barges or floating platforms, allowing them to operate on water bodies such as rivers, lakes, and coastal areas. They are used for marine construction projects, port operations, and offshore mining activities, such as lifting and installing offshore structures, loading and unloading cargo ships, and dredging operations.',
            'category_id' => 5,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Tower Mast',
            'description' => 'Tower mast cranes are compact cranes mounted on a mast or tower structure, allowing them to operate in confined spaces or at heights. They are commonly used in construction for tasks such as lifting materials and equipment to upper floors of buildings, as well as in mining for maintenance and repair tasks in tight spaces.',
            'category_id' => 5,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Utility',
            'description' => 'Utility crawler carriers are compact, versatile vehicles designed for various tasks in construction, mining, and agriculture. They are equipped with a flatbed or dump body for transporting materials, tools, and equipment to remote or rugged locations. Utility crawler carriers are commonly used for hauling construction materials, supplies, and equipment across construction sites, mine sites, and agricultural fields.',
            'category_id' => 6,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Dump',
            'description' => 'Dump crawler carriers are specialized vehicles equipped with a dump bed or skip for transporting and dumping bulk materials such as soil, gravel, sand, and debris. They are commonly used in construction, mining, and agriculture for tasks such as earthmoving, site preparation, and material transport. Dump crawler carriers offer high maneuverability and are capable of navigating steep slopes and rough terrain.',
            'category_id' => 6,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Water Tank',
            'description' => 'Water tank crawler carriers are equipped with a water tank for transporting and spraying water or other liquids in construction, mining, and agricultural applications. They are used for dust suppression, soil compaction, irrigation, and firefighting tasks. Water tank crawler carriers are commonly employed in construction sites, mine sites, and agricultural fields to maintain soil moisture and control dust emissions.',
            'category_id' => 6,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Personnel Carrier',
            'description' => 'Personnel carrier crawler carriers are designed for transporting workers, technicians, and personnel to remote or inaccessible areas in construction, mining, and agriculture. They are equipped with seating arrangements or personnel carriers for safely transporting personnel across rough terrain. Personnel carrier crawler carriers are commonly used in remote construction sites, mine sites, and agricultural operations where access by conventional vehicles is limited.',
            'category_id' => 6,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Fuel/Lube',
            'description' => 'Fuel/lube crawler carriers are equipped with fuel and lubricant tanks, as well as dispensing equipment for refueling and servicing heavy equipment and machinery in construction, mining, and agriculture. They are used for onsite refueling, lubrication, and maintenance tasks to keep equipment and machinery operational. Fuel/lube crawler carriers are commonly deployed in construction sites, mine sites, and agricultural operations to support equipment maintenance activities.',
            'category_id' => 6,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Crane',
            'description' => 'Crane crawler carriers are equipped with a crane or lifting mechanism for lifting and handling heavy loads in construction, mining, and agricultural applications. They are used for loading and unloading materials, erecting structures, and performing lifting tasks in remote or challenging environments. Crane crawler carriers offer versatility and mobility for lifting operations in various industries.',
            'category_id' => 6,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Concrete Mixer',
            'description' => 'Concrete mixer crawler carriers are specialized vehicles equipped with a concrete mixer drum for transporting and mixing concrete in construction and infrastructure projects. They are used for onsite concrete production, transportation, and placement in remote or difficult-to-access locations. Concrete mixer crawler carriers enable efficient concrete delivery and placement in construction sites, mine sites, and infrastructure projects.',
            'category_id' => 6,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Jaw',
            'description' => 'Jaw crushers are primary crushers used to break down large, hard, and abrasive materials into smaller particles. They consist of a fixed jaw and a moving jaw, which compresses the material against the fixed jaw to break it down. Jaw crushers are widely used in quarrying, mining, demolition, and recycling applications.',
            'category_id' => 7,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Impact',
            'description' => 'Impact crushers use impact force to crush materials, making them suitable for medium-hard to hard materials. They feature a high-speed rotor with blow bars or hammers that impact the material, causing it to break apart. Impact crushers are commonly used in construction, quarrying, and recycling applications.',
            'category_id' => 7,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Cone',
            'description' => 'Cone crushers are used for secondary and tertiary crushing stages, producing finer and more uniform particles. They operate by squeezing the material between an eccentrically rotating mantle and a concave hopper. Cone crushers are widely used in mining, quarrying, and aggregate production.',
            'category_id' => 7,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Roll',
            'description' => 'Roll crushers consist of two counter-rotating cylinders with crushing surfaces (rolls) that rotate towards each other. They are used for reducing the size of friable materials such as coal, limestone, clay, and shale. Roll crushers are commonly used in mining, coal processing, and mineral processing applications.',
            'category_id' => 7,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Hammer',
            'description' => 'Hammer crushers utilize rotating hammers or swinging bars to impact and crush materials. They are suitable for crushing materials with a low to medium hardness, such as limestone, gypsum, and coal. Hammer crushers are commonly used in mining, cement, and metallurgical industries.',
            'category_id' => 7,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Vertical Shaft Impact (VSI)',
            'description' => 'VSI crushers use a high-speed rotor with wear-resistant tips to crush materials through impact and attrition. They are used for shaping and producing artificial sand, as well as for crushing aggregate materials such as gravel and recycled concrete. VSI crushers are commonly used in construction and mining industries.',
            'category_id' => 7,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Gyratory',
            'description' => 'Gyratory crushers consist of a mantle mounted on a conical-shaped main shaft, which gyrates eccentrically within a stationary concave. They are used for primary crushing of large, hard, and abrasive materials. Gyratory crushers are commonly used in mining and mineral processing applications.',
            'category_id' => 7,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Wood',
            'description' => 'Wood crushers are used in the agriculture industry for shredding and grinding wood materials such as branches, logs, and wood waste. They are commonly used in forestry operations, sawmills, and wood processing facilities to produce wood chips, mulch, and biomass fuel.',
            'category_id' => 7,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Crawler/Track-Type Tractor',
            'description' => 'Crawler dozers, also known as track-type tractors, are equipped with metal tracks instead of wheels, providing superior traction and stability on rough terrain. They are widely used in construction, mining, and agriculture for earthmoving, grading, and land clearing tasks. Crawler dozers come in various sizes and configurations, with different blade types (straight, angle, and combination blades) to suit different applications.',
            'category_id' => 8,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Wheel',
            'description' => 'Wheel dozers are equipped with large, rugged wheels instead of tracks, providing mobility and maneuverability on various surfaces, including paved roads and soft soils. They are commonly used in construction, mining, and agriculture for pushing and moving materials, as well as for leveling and grading tasks. Wheel dozers typically feature a large, wide blade for efficient material handling and earthmoving operations.',
            'category_id' => 8,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Mini',
            'description' => 'Mini dozers, also known as compact dozers or mini bulldozers, are smaller-sized machines designed for light-duty earthmoving and landscaping tasks in confined spaces or urban areas. They are commonly used in construction, landscaping, and agriculture for grading, leveling, and backfilling tasks. Mini dozers feature a compact design, making them suitable for maneuvering in tight spaces and residential areas.',
            'category_id' => 8,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Swamp/Marsh Buggy',
            'description' => 'Swamp dozers, also known as marsh buggies or amphibious dozers, are specialized machines designed for working in wetlands, marshes, and swamps. They are equipped with wide tracks or pontoons that provide flotation and mobility on soft, waterlogged terrain. Swamp dozers are commonly used in environmental restoration projects, wetland conservation, and land reclamation efforts.',
            'category_id' => 8,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Hydrostatic',
            'description' => 'Hydrostatic dozers utilize hydrostatic transmission systems to control the speed and direction of the machine\'s movement. They offer smooth and precise control, making them suitable for fine grading and leveling tasks in construction, mining, and agriculture. Hydrostatic dozers are commonly used in applications where precise maneuverability and control are required, such as landscaping, site development, and road construction.',
            'category_id' => 8,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Ripper',
            'description' => 'Ripper dozers are equipped with a ripper attachment mounted on the rear of the machine, used for breaking up hard or compacted soil, rock, and pavement surfaces. They are commonly used in mining, quarrying, and road construction for ripping, scarifying, and loosening materials before excavation or grading operations. Ripper dozers are equipped with heavy-duty rippers that penetrate and fracture tough materials effectively.',
            'category_id' => 8,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Rotary',
            'description' => 'Rotary drills are versatile machines used in construction, mining, and agriculture for drilling holes in various materials, including soil, rock, concrete, and metal. They operate by rotating a drill bit or drill string to penetrate the material, while simultaneous flushing of cuttings removes debris from the hole. Rotary drills are commonly used for foundation drilling, exploration drilling, and water well drilling.',
            'category_id' => 9,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Auger',
            'description' => 'Auger drills are specialized tools designed for drilling holes in soil, sediment, and soft rock formations. They consist of a helical auger bit or screw-shaped drill bit attached to a rotating shaft, which digs into the ground as it rotates. Auger drills are commonly used in agriculture for planting seeds, soil sampling, and installing fence posts. They are also used in construction for installing ground anchors, pile foundations, and soil stabilization.',
            'category_id' => 9,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Percussion/Jackhammer',
            'description' => 'Percussion drills, also known as jackhammers or hammer drills, are powered tools used for drilling holes in hard materials such as concrete, asphalt, and rock. They operate by delivering rapid hammer blows to the drill bit while simultaneously rotating it to break up the material. Percussion drills are commonly used in construction for concrete demolition, rock excavation, and tunneling.',
            'category_id' => 9,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Core',
            'description' => 'Core drills are specialized drilling machines used for extracting cylindrical cores or samples from hard materials such as concrete, asphalt, and rock. They operate by rotating a hollow drill bit with diamond-impregnated segments to cut through the material and retrieve a core sample. Core drills are commonly used in construction for concrete coring, pavement analysis, and geological exploration.',
            'category_id' => 9,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Directional/Horizontal Directional Drilling(HDD)',
            'description' => 'Directional drills are advanced drilling machines used in construction, mining, and utility installation projects for drilling horizontally or at specific angles underground. They operate by steering a drill string with a bent sub or downhole motor to follow a predetermined path beneath the surface. Directional drills are commonly used for installing underground utilities, pipelines, and cables without disrupting surface structures.',
            'category_id' => 9,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Press',
            'description' => 'Drill presses are stationary machines used in manufacturing, fabrication, and metalworking industries for drilling precise holes in workpieces. They consist of a fixed vertical column with a motor-driven spindle and a worktable that supports the workpiece. Drill presses offer accurate drilling capabilities and are commonly used for repetitive drilling operations, such as drilling holes in metal components, woodwork, and plastic materials.',
            'category_id' => 9,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Crawler',
            'description' => 'Crawler excavators, also known as tracked excavators, are equipped with tracks instead of wheels, providing enhanced stability and mobility on rough terrain. They are versatile machines used for various excavation, earthmoving, and material handling tasks in construction, mining, and agriculture. Crawler excavators feature a rotating cab mounted on a tracked chassis, along with a hydraulic arm and bucket for digging and loading operations.',
            'category_id' => 10,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Wheeled',
            'description' => 'Wheeled excavators are equipped with wheels instead of tracks, offering greater mobility and maneuverability on paved surfaces and in urban environments. They are commonly used in construction projects, road maintenance, and utility installations where frequent relocation and travel on roads are required. Wheeled excavators feature a rotating cab mounted on a wheeled chassis, along with a hydraulic arm and bucket for digging and lifting operations.',
            'category_id' => 10,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Mini',
            'description' => 'Mini excavators, also known as compact excavators or mini diggers, are smaller-sized machines designed for working in confined spaces and tight job sites. They are widely used in construction, landscaping, and agriculture for excavation, trenching, and utility installation tasks. Mini excavators feature a compact design with a hydraulic arm and bucket for precise digging and material handling in restricted areas.',
            'category_id' => 10,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Long Reach',
            'description' => 'Long reach excavators are specialized machines equipped with extended booms and hydraulic arms, allowing them to reach greater depths and heights compared to standard excavators. They are commonly used in dredging, river maintenance, and slope stabilization projects, as well as in mining and quarrying operations for excavating deep pits or trenches. Long reach excavators are also used in agriculture for tasks such as dredging irrigation channels or clearing waterways.',
            'category_id' => 10,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Amphibious',
            'description' => 'Amphibious excavators are specialized machines designed to operate in wetland environments, marshes, and shallow water areas. They are equipped with pontoons or flotation devices that enable them to float on water while performing excavation, dredging, or vegetation removal tasks. Amphibious excavators are commonly used in environmental restoration projects, wetland conservation, and aquatic vegetation management in agriculture.',
            'category_id' => 10,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Dragline',
            'description' => 'Dragline excavators are large, heavy-duty machines used primarily in mining and civil engineering projects for stripping overburden, excavating minerals, and constructing large-scale earthworks. They feature a long boom with a bucket suspended from a cable or dragline, which is used to excavate materials from the ground and deposit them into haul trucks or stockpiles. Dragline excavators are highly productive and are used in open-pit mining operations for extracting coal, ores, and other minerals.',
            'category_id' => 10,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Angle',
            'description' => 'Angle grinders, also known as disc grinders or side grinders, are handheld power tools used for cutting, grinding, and polishing materials such as metal, stone, concrete, and tile. They are widely used in construction and metalworking industries for tasks such as cutting rebar, grinding welds, and surface preparation for welding or painting.',
            'category_id' => 11,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Bench',
            'description' => 'Bench grinders are stationary power tools mounted on a workbench or pedestal, with grinding wheels on each side. They are used for sharpening, shaping, and deburring metal objects and tools in workshops, fabrication shops, and maintenance facilities. Bench grinders are commonly used in metalworking, woodworking, and machine shop applications.',
            'category_id' => 11,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Surface',
            'description' => 'Surface grinders are precision grinding machines used to produce smooth and flat surfaces on workpieces made of metal, plastic, or other materials. They utilize a rotating abrasive wheel to remove material from the surface of the workpiece, achieving high levels of accuracy and surface finish. Surface grinders are widely used in manufacturing, tool and die making, and precision machining operations.',
            'category_id' => 11,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Stump',
            'description' => 'Stump grinders are specialized machines used for removing tree stumps and roots from the ground after tree removal. They feature a rotating cutting wheel with carbide teeth that grind the stump and roots into small chips, allowing for easy removal or decomposition. Stump grinders are commonly used in landscaping, forestry, and tree care services.',
            'category_id' => 11,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Tub',
            'description' => 'Tub grinders are heavy-duty machines used for grinding large volumes of organic materials such as wood waste, brush, and agricultural residues. They feature a large tub-shaped container with a rotating hammermill or grinding mechanism inside. Tub grinders are commonly used in forestry operations, land clearing projects, and biomass processing facilities to produce wood chips, mulch, or biomass fuel.',
            'category_id' => 11,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Feed',
            'description' => 'Feed grinders, also known as hammer mills, are machines used for grinding grains, forage, and other feed ingredients into smaller particles for livestock feed. They typically feature a hammer mill mechanism that pulverizes the feed material by striking it with rotating hammers. Feed grinders are commonly used in animal husbandry, livestock farming, and feed processing facilities.',
            'category_id' => 11,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Combine',
            'description' => 'Combine harvesters, often simply called combines, are versatile machines used for harvesting grains such as wheat, barley, corn, and soybeans. They perform multiple functions in a single pass, including cutting the crop, separating the grain from the straw or chaff, and collecting the grain in a hopper. Combine harvesters significantly increase harvesting efficiency and are essential in large-scale grain production.',
            'category_id' => 12,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Forage',
            'description' => 'Forage harvesters, also known as silage harvesters or choppers, are specialized machines used to harvest and process forage crops such as corn, sorghum, and grasses for livestock feed. They cut the crop into small pieces, called silage, which are then stored in silage pits or silos for fermentation. Forage harvesters are commonly used in dairy farming, beef cattle production, and animal feed production.',
            'category_id' => 12,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Cotton',
            'description' => 'Cotton harvesters, also called cotton pickers or cotton stripping machines, are designed specifically for harvesting cotton crops. They remove the cotton bolls from the plants and separate them from the leaves and stems. Cotton harvesters can be either mechanical pickers that pluck the cotton bolls from the plants or stripper harvesters that strip the entire plant and then separate the cotton from the plant material.',
            'category_id' => 12,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Sugar Cane',
            'description' => 'Sugar cane harvesters are specialized machines used to harvest sugar cane crops in regions where sugar cane is grown for sugar production or ethanol fuel. They cut the sugar cane stalks close to the ground and load them onto a conveyor for transport to processing facilities. Sugar cane harvesters are highly efficient and can significantly reduce labor requirements in sugar cane harvesting operations.',
            'category_id' => 12,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Potato',
            'description' => 'Potato harvesters, also known as potato diggers or potato harvesters, are machines designed for harvesting potatoes from the soil. They typically use a series of rotating blades or digger bars to lift the potatoes from the ground, followed by conveyors or belts to transport the potatoes to a collection point. Potato harvesters are used in potato farming operations worldwide to streamline the harvesting process and reduce labor costs.',
            'category_id' => 12,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Grape',
            'description' => 'Grape harvesters are specialized machines used in viticulture for harvesting wine grapes. They can be either mechanical harvesters that shake the grapevines to dislodge the grapes, which are then collected on a conveyor belt, or grape-picking machines equipped with picking rods or fingers that gently remove the grapes from the vines. Grape harvesters help wineries optimize grape harvesting efficiency and maintain grape quality.',
            'category_id' => 12,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Skid Steer',
            'description' => 'Skid steer loaders are compact, versatile machines with a unique steering system that allows them to turn on the spot. They are widely used in construction, landscaping, and agriculture for tasks such as loading, digging, grading, and material handling. Skid steer loaders are equipped with a bucket attachment at the front and can accommodate various other attachments, such as pallet forks, augers, and trenchers, making them highly adaptable to different job site requirements.',
            'category_id' => 13,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Wheel',
            'description' => 'Wheel loaders, also known as front-end loaders, are large, heavy-duty machines equipped with a wide bucket at the front for loading and transporting materials such as soil, gravel, sand, and aggregate. They are commonly used in construction, mining, quarrying, and material handling operations for tasks such as loading trucks, stockpiling, and excavating. Wheel loaders are available in various sizes and configurations to suit different applications and operating conditions.',
            'category_id' => 13,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Backhoe',
            'description' => 'Backhoe loaders combine the capabilities of a loader and a backhoe in a single machine. They feature a loader bucket at the front and a hydraulic backhoe attachment at the rear, allowing them to perform both loading and excavation tasks. Backhoe loaders are versatile machines widely used in construction, utilities, landscaping, and agriculture for tasks such as digging trenches, loading trucks, and excavating foundations.',
            'category_id' => 13,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Compact Track',
            'description' => 'Compact track loaders (CTLs) are similar to skid steer loaders but feature rubber tracks instead of wheels, providing enhanced traction and flotation on uneven or soft terrain. They are commonly used in construction, landscaping, and agriculture for tasks such as grading, trenching, and material handling in challenging ground conditions. Compact track loaders offer greater stability and lower ground pressure compared to wheeled loaders, making them suitable for sensitive surfaces.',
            'category_id' => 13,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Crawler',
            'description' => 'Crawler loaders, also known as track loaders, are equipped with tracks instead of wheels, offering increased traction and stability, particularly in rough terrain and soft ground conditions. They are commonly used in construction, mining, and forestry for tasks such as loading trucks, excavating, and clearing land. Crawler loaders feature a front-mounted loader bucket and are capable of handling heavy loads and operating in challenging environments.',
            'category_id' => 13,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Articulated',
            'description' => 'Articulated loaders, also known as articulated wheel loaders, feature a pivot joint between the front and rear sections of the machine, allowing them to articulate or bend in the middle. This design provides greater maneuverability and flexibility, making them suitable for tight spaces and confined job sites. Articulated loaders are commonly used in construction, landscaping, and agriculture for tasks such as loading, grading, and material handling in urban areas and narrow access points.',
            'category_id' => 13,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Boom',
            'description' => 'Boom lifts, also known as cherry pickers or aerial work platforms, feature an extendable boom with a platform at the end for workers to stand on. They are versatile machines that can reach heights ranging from several meters to over 100 feet. Boom lifts are commonly used in construction, maintenance, and agriculture for tasks such as building maintenance, tree trimming, and overhead work.',
            'category_id' => 14,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Scissor',
            'description' => 'Scissor lifts are platform lifts that operate on a mechanism of crisscrossing supports, resembling the shape of a pair of scissors when extended. They are commonly used in construction, maintenance, and agriculture for tasks such as painting, installation, and maintenance work. Scissor lifts provide a stable and elevated platform for workers to perform tasks at various heights.',
            'category_id' => 14,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Telescopic Boom',
            'description' => 'Telescopic boom lifts, also known as straight boom lifts, feature a telescoping boom that extends vertically and horizontally, allowing them to reach high and far-reaching areas. They are commonly used in construction, agriculture, and maintenance for tasks such as building construction, bridge inspection, and orchard maintenance.',
            'category_id' => 14,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Articulating Boom',
            'description' => 'Articulating boom lifts, also known as knuckle boom lifts, feature multiple sections that articulate or bend, allowing them to maneuver around obstacles and reach tight spaces. They are commonly used in construction, maintenance, and agriculture for tasks such as building maintenance, landscaping, and orchard pruning.',
            'category_id' => 14,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Vertical',
            'description' => 'Vertical mast lifts, also known as personnel lifts or vertical personnel platforms, feature a vertical mast with a platform for one or two workers. They are compact and lightweight machines designed for indoor and outdoor use in tight spaces. Vertical mast lifts are commonly used in construction, maintenance, and agriculture for tasks such as ceiling installation, facility maintenance, and picking fruit in orchards.',
            'category_id' => 14,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Trailer-Mounted',
            'description' => 'Trailer-mounted lifts are portable lifts that can be towed behind a vehicle to different job sites. They are commonly used in construction, maintenance, and agriculture for tasks such as painting, signage installation, and orchard maintenance. Trailer-mounted lifts offer flexibility and mobility, allowing workers to access elevated areas in various locations.',
            'category_id' => 14,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Rotary',
            'description' => 'Rotary mowers are versatile machines equipped with rotating blades that cut vegetation with a chopping action. They are commonly used for cutting grass, weeds, and light brush in pastures, fields, and roadside areas. Rotary mowers are available in various sizes and configurations, including single-deck and multi-deck models, and can be mounted on tractors or operated as standalone units.',
            'category_id' => 15,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Disc',
            'description' => 'Disc mowers are designed for cutting hay, forage crops, and grasses in agricultural fields. They feature a series of rotating discs mounted on a horizontal cutter bar, which slices through the vegetation in a scissor-like motion. Disc mowers are known for their high cutting efficiency, clean cuts, and ability to handle heavy-duty cutting tasks in large fields or pastures.',
            'category_id' => 15,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Flail',
            'description' => 'Flail mowers feature a rotating drum or shaft with attached flail blades that chop and shred vegetation as they spin. They are commonly used for cutting grass, weeds, and brush in rough terrain, ditches, and roadside areas. Flail mowers are versatile machines that can handle tough vegetation, including small trees and saplings, making them suitable for land clearing and brush management applications.',
            'category_id' => 15,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Sickle Bar',
            'description' => 'Sickle bar mowers use a reciprocating sickle bar with serrated blades to cut vegetation in a back-and-forth motion. They are often used for cutting hay, forage crops, and grasses in smaller fields, orchards, and vineyards. Sickle bar mowers are known for their precise cutting and ability to handle delicate crops without causing damage.',
            'category_id' => 15,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Finish',
            'description' => 'Finish mowers are designed for providing a fine, manicured cut to grassy areas such as lawns, parks, and golf courses. They typically feature a single-deck rotary design with closely spaced blades that produce a smooth, even cut. Finish mowers are commonly used for maintaining landscaped areas and aesthetic landscapes on farms and agricultural estates.',
            'category_id' => 15,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Zero-Turn',
            'description' => 'Zero-turn mowers are maneuverable machines equipped with independently controlled drive wheels that allow them to turn on a dime without leaving uncut grass or making tight turns. They are commonly used for mowing large open areas such as pastures, fields, and orchards, where efficiency and maneuverability are essential. Zero-turn mowers are available in various deck widths and configurations to suit different mowing needs.',
            'category_id' => 15,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Forestry',
            'description' => 'Forestry mulchers are heavy-duty machines designed for clearing dense vegetation, trees, and brush in forestry, land clearing, and construction projects. They typically feature a rotating drum or disc equipped with cutting teeth or blades that grind vegetation into mulch. Forestry mulchers are commonly used for clearing land for road construction, site preparation, and firebreak creation.',
            'category_id' => 16,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Flail',
            'description' => 'Flail mulchers are versatile machines that use a rotating shaft with hammers or flails to shred vegetation into fine mulch. They are commonly used in agriculture, orchards, vineyards, and landscaping for vegetation management, weed control, and mulch production. Flail mulchers can handle a wide range of materials, including grass, weeds, crop residues, and small branches.',
            'category_id' => 16,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Vertical',
            'description' => 'Vertical mulchers, also known as vertical shaft mulchers or shredders, are designed for shredding and mulching vegetation in orchards, vineyards, and roadside maintenance. They feature a vertical rotor with swinging blades or flails that pulverize vegetation as it passes through a feed chute. Vertical mulchers are suitable for shredding pruned branches, grass, weeds, and crop residues.',
            'category_id' => 16,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Rotary',
            'description' => 'Rotary mulchers are compact machines equipped with a rotary drum or disc fitted with cutting blades or hammers. They are commonly used in agriculture, horticulture, and landscaping for mulching grass, weeds, and small vegetation. Rotary mulchers are versatile and can be mounted on tractors, excavators, skid steers, or other equipment for various applications.',
            'category_id' => 16,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Compact',
            'description' => 'Compact mulchers are lightweight and maneuverable machines designed for mulching vegetation in confined spaces, urban areas, and landscaping projects. They are commonly used for clearing vegetation along roadsides, trails, and fence lines, as well as maintaining parks and green spaces. Compact mulchers are available in various sizes and configurations to suit different applications and equipment.',
            'category_id' => 16,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Asphalt',
            'description' => 'Asphalt pavers, also known as asphalt laying machines or asphalt finishers, are used to lay asphalt pavement for roads, highways, parking lots, and other paved surfaces. These machines distribute and compact hot asphalt mixtures to create smooth and durable surfaces.',
            'category_id' => 17,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Concrete',
            'description' => 'Concrete pavers, also called concrete paving machines or slipform pavers, are used to lay concrete for roads, sidewalks, bike paths, and other flat surfaces. They can create various shapes and patterns, including straight sections, curves, and decorative designs, by extruding or forming wet concrete into the desired shape.',
            'category_id' => 17,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Interlocking',
            'description' => 'Interlocking pavers are individual units made of concrete, clay, or other materials that interlock together to create a stable and durable pavement surface. These pavers are commonly used for driveways, walkways, patios, and landscaping projects. Interlocking pavers come in various shapes, sizes, and colors, allowing for customizable designs and patterns.',
            'category_id' => 17,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Brick',
            'description' => 'Brick pavers, made from clay or concrete, are similar to interlocking pavers but are specifically made in brick shapes. They are commonly used for pedestrian walkways, landscaping borders, and architectural accents. Brick pavers provide a classic and aesthetic appeal to outdoor spaces and are known for their durability and low maintenance.',
            'category_id' => 17,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Turf',
            'description' => 'Turf pavers, also known as grass or permeable pavers, are used to create stable and porous surfaces for parking lots, fire lanes, and green spaces. These pavers have void spaces that allow grass or vegetation to grow through them, providing natural infiltration of stormwater and reducing runoff. Turf pavers help mitigate soil erosion, enhance groundwater recharge, and improve the environmental sustainability of paved areas.',
            'category_id' => 17,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Diesel',
            'description' => 'Diesel piledrivers are powered by diesel engines and are versatile machines used for driving various types of piles, including steel, concrete, and timber piles. They are commonly used in construction projects such as building foundations, bridges, and marine structures.',
            'category_id' => 18,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Hydraulic',
            'description' => 'Hydraulic piledrivers use hydraulic systems to generate the force required for pile driving. These machines offer precise control over pile placement and driving speed, making them suitable for driving piles in challenging soil conditions and confined spaces. Hydraulic piledrivers are commonly used in road construction, retaining walls, and sheet pile installations.',
            'category_id' => 18,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Vibratory',
            'description' => 'Vibratory piledrivers use vibratory mechanisms to drive piles into the ground. They generate high-frequency vibrations that liquefy the soil around the pile, reducing friction and resistance during driving. Vibratory piledrivers are effective for driving sheet piles, H-piles, and other types of piles in cohesive or granular soils. They are commonly used in marine construction, port facilities, and foundation projects.',
            'category_id' => 18,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Impact',
            'description' => 'Impact piledrivers, also known as drop hammer piledrivers, use a heavy weight or hammer to deliver impact force to the pile. The weight is lifted to a certain height and then dropped onto the pile, driving it into the ground. Impact piledrivers are suitable for driving steel piles, concrete piles, and precast piles in various soil conditions. They are commonly used in bridge construction, pier foundations, and offshore structures.',
            'category_id' => 18,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Pneumatic',
            'description' => 'Pneumatic piledrivers use compressed air to drive piles into the ground. They feature a pneumatic hammer or piston that strikes the pile, transferring energy to the pile and driving it into the soil. Pneumatic piledrivers are suitable for driving piles in sandy or granular soils and are commonly used in construction projects such as roadways, railways, and pipelines.',
            'category_id' => 18,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Side Boom',
            'description' => 'Side boom pipelayers are the most common type used in the construction industry. They feature a crane-like structure mounted on a crawler or wheeled chassis, with a boom equipped with a specialized attachment, known as a side boom. Side boom pipelayers are capable of lifting and positioning pipes into trenches with precision, making them suitable for various pipeline installation projects.',
            'category_id' => 19,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Counterweight',
            'description' => 'Counterweight pipelayers are similar to side boom pipelayers but have an additional counterweight mechanism to provide stability and balance when lifting heavy loads. These pipelayers are often used in challenging terrains or adverse weather conditions where stability is crucial for safe and efficient pipeline installation.',
            'category_id' => 19,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Tracked',
            'description' => 'Tracked pipelayers feature a tracked undercarriage for enhanced mobility and maneuverability in rough terrain. They are commonly used in pipeline construction projects in remote or inaccessible areas where wheeled vehicles may have difficulty navigating.',
            'category_id' => 19,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Wheeled',
            'description' => 'Wheeled pipelayers have a wheeled chassis instead of tracks, offering greater speed and flexibility on flat or paved surfaces. They are commonly used in urban areas or construction sites with improved ground conditions where tracked pipelayers may not be necessary.',
            'category_id' => 19,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Telescopic Boom',
            'description' => 'Telescopic boom pipelayers feature a telescoping boom that can extend and retract to reach varying heights and distances. These pipelayers are suitable for projects that require lifting pipes over obstacles or into elevated positions.',
            'category_id' => 19,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Moldboard Plow',
            'description' => 'Moldboard plows consist of a curved blade (moldboard) that turns the soil over as it cuts through the ground. They are effective for burying crop residue, breaking up compacted soil, and controlling weeds.',
            'category_id' => 20,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Chisel Plow',
            'description' => 'Chisel plows have multiple narrow, chisel-shaped shanks that penetrate the soil to break up compacted layers and aerate the soil. They are commonly used for deep tillage and soil conditioning in preparation for planting.',
            'category_id' => 20,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Disk Harrow',
            'description' => 'Disk harrows consist of a series of concave disks mounted on a frame. They cut through the soil, breaking up clumps and leveling the ground. Disk harrows are versatile tools used for seedbed preparation, weed control, and incorporation of crop residue.',
            'category_id' => 20,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Field Cultivator',
            'description' => 'Field cultivators have multiple spring-loaded shanks equipped with sweeps or tines that loosen and aerate the soil. They are used for shallow tillage, seedbed preparation, and weed control in row crops and small grains.',
            'category_id' => 20,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Rotary Tiller',
            'description' => 'Rotary tillers, also known as rototillers or rotary hoes, have rotating blades or tines that churn and pulverize the soil. They are commonly used for seedbed preparation in gardens, landscaping, and small-scale farming operations.',
            'category_id' => 20,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Subsoiler',
            'description' => 'Subsoilers have a single, large shank or ripper tooth designed to break up compacted soil layers below the surface. They are used for deep tillage to improve drainage, root penetration, and soil structure.',
            'category_id' => 20,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Power Harrow',
            'description' => 'Power harrows consist of multiple sets of rotating tines mounted on a horizontal shaft. They loosen and mix the soil while creating a fine seedbed. Power harrows are commonly used for seedbed preparation in vegetable production and specialty crops.',
            'category_id' => 20,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Strip Tillage',
            'description' => 'Strip tillage equipment creates narrow strips of tilled soil while leaving crop residue undisturbed between the rows. It combines tillage and planting operations in a single pass, reducing soil erosion and fuel consumption.',
            'category_id' => 20,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Centrifugal',
            'description' => 'Centrifugal pumps are widely used in construction, mining, and agriculture due to their simplicity, reliability, and versatility. They work by converting rotational energy from a motor into kinetic energy to move fluid. Centrifugal pumps are used for tasks such as water transfer, irrigation, dewatering, and slurry pumping.',
            'category_id' => 21,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Submersible',
            'description' => 'Submersible pumps are designed to be submerged in the fluid they are pumping. They are commonly used for dewatering applications in construction sites, mining operations, and agricultural fields, as well as for drainage, sewage pumping, and groundwater extraction.',
            'category_id' => 21,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Diaphragm',
            'description' => 'Diaphragm pumps use a flexible diaphragm to create suction and discharge fluid. They are suitable for handling abrasive or viscous fluids, making them useful for pumping slurries, chemicals, and wastewater in construction, mining, and agricultural applications.',
            'category_id' => 21,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Positive Displacement',
            'description' => 'Positive displacement pumps deliver a fixed volume of fluid with each cycle of operation. Types of positive displacement pumps include piston pumps, gear pumps, and rotary pumps. These pumps are used for tasks such as metering, dosing, and transferring fluids in various construction, mining, and agricultural processes.',
            'category_id' => 21,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Trash',
            'description' => 'Trash pumps are designed to handle water containing solids, debris, and other contaminants. They are commonly used for dewatering flooded areas, removing sludge and sediment, and pumping water with high concentrations of solids in construction, mining, and agricultural settings.',
            'category_id' => 21,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Slurry',
            'description' => 'Slurry pumps are specifically designed to handle abrasive and high-viscosity slurries. They are used in mining operations for transporting mineral slurries, in construction for handling concrete slurry, and in agricultural settings for pumping manure slurries and irrigation water with suspended solids.',
            'category_id' => 21,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Jet',
            'description' => 'Jet pumps use a jet of fluid to create suction and draw water or other fluids from a well or reservoir. They are commonly used in agricultural irrigation systems, water wells, and water supply systems for remote construction sites.',
            'category_id' => 21,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Axial Flow',
            'description' => 'Axial flow pumps are designed to move large volumes of water at low head heights. They are commonly used in agricultural irrigation systems, drainage projects, and flood control applications.',
            'category_id' => 21,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Wheel Tractor',
            'description' => 'Wheel tractor-scrapers consist of a wheeled tractor unit pulling a scraper bowl. They are commonly used in construction and mining for hauling and spreading materials such as soil, gravel, and rock. These scrapers are versatile and efficient for earthmoving tasks on large job sites.',
            'category_id' => 22,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Elevating',
            'description' => 'Elevating scrapers feature a conveyor belt or elevator system that lifts material from the ground into the scraper bowl. They are used for loading and hauling soil, aggregate, and other materials in construction, mining, and agricultural applications. Elevating scrapers are particularly useful for working in areas with limited access or uneven terrain.',
            'category_id' => 22,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Pull',
            'description' => 'Pull scrapers are towed behind a prime mover (such as a tractor or bulldozer) and consist of a bowl that fills with material as it is dragged across the ground. Once filled, the scraper is raised and transported to the desired location to deposit the material. Pull scrapers are commonly used for land leveling, road construction, and agricultural field preparation.',
            'category_id' => 22,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Push-Pull',
            'description' => 'Push-pull scrapers consist of two scraper units connected in tandem, with one unit pushing and the other pulling. This configuration allows for increased efficiency and productivity when moving large volumes of material over longer distances. Push-pull scrapers are commonly used in large-scale earthmoving projects, such as highway construction and mining operations.',
            'category_id' => 22,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Motor',
            'description' => 'Motor scrapers are self-propelled machines equipped with a scraper bowl for loading, hauling, and spreading material. They feature a cab for the operator and are powered by an onboard engine. Motor scrapers are used in construction and mining for earthmoving tasks such as excavation, backfilling, and road construction.',
            'category_id' => 22,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Towed',
            'description' => 'Towed scrapers are similar to pull scrapers but are designed to be towed behind a tractor or other agricultural machinery. They are used in agriculture for tasks such as land leveling, ditching, and irrigation canal construction. Towed scrapers are efficient for preparing fields and shaping land for crop planting.',
            'category_id' => 22,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Vibrating',
            'description' => 'Vibrating screeners use vibrating screens to separate materials based on size and shape. They work by passing the material through a vibrating screen with different-sized openings or meshes. Vibrating screeners are commonly used in construction and mining for separating aggregates, ores, and minerals of varying sizes.',
            'category_id' => 23,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Trommel',
            'description' => 'Trommel screeners consist of a rotating cylindrical drum with perforated metal or wire mesh screens. As the drum rotates, material is fed into one end and sorted by size as it moves along the length of the drum. Trommel screeners are commonly used in construction, mining, and agriculture for separating soil, compost, and biomass.',
            'category_id' => 23,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Flat Deck',
            'description' => 'Flat deck screeners feature a flat surface with multiple layers of screens or decks stacked on top of each other. Material is fed onto the top deck and sorted as it moves across the screens by vibration or gravity. Flat deck screeners are commonly used in construction and mining for sorting aggregates, sand, and gravel.',
            'category_id' => 23,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Rotary',
            'description' => 'Rotary screeners, also known as drum screeners or rotary sieves, consist of a rotating cylindrical drum with perforated metal or wire mesh screens. Material is fed into one end of the drum, and particles smaller than the screen openings pass through, while larger particles are retained and discharged at the other end. Rotary screeners are commonly used in agriculture for separating grains, seeds, and other agricultural products.',
            'category_id' => 23,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Flip Flow',
            'description' => 'Flip flow screeners use elastic screen panels with specially designed fingers to sort and separate materials. The panels vibrate in a controlled manner, causing particles to flip and rotate, allowing smaller particles to pass through while larger particles are retained. Flip flow screeners are commonly used in construction, mining, and recycling for separating difficult-to-screen materials such as wet, sticky, or abrasive substances.',
            'category_id' => 23,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Gyratory',
            'description' => 'Gyratory screeners use gyratory motion to separate materials by size. They feature a circular screening surface that gyrates in a circular motion, causing particles to move along the surface and separate based on size. Gyratory screeners are commonly used in construction and mining for sorting aggregates, ores, and minerals.',
            'category_id' => 23,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Utility',
            'description' => 'Utility side-by-sides are rugged vehicles designed for work applications in construction, mining, and agriculture. They typically feature a cargo bed at the rear for hauling materials, tools, and equipment. Utility side-by-sides are equipped with powerful engines and robust suspension systems to handle rough terrain and heavy loads.',
            'category_id' => 24,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Crew Cab',
            'description' => 'Crew cab side-by-sides, also known as multi-passenger side-by-sides, feature an extended cab with additional seating capacity. They are suitable for transporting work crews, equipment, and materials to job sites in construction, mining, and agriculture. Crew cab side-by-sides offer increased versatility and efficiency for larger work teams.',
            'category_id' => 24,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Electric',
            'description' => 'Electric side-by-sides are environmentally friendly vehicles powered by electric motors. They are suitable for applications where noise and emissions need to be minimized, such as indoor construction projects, urban areas, and environmentally sensitive areas in agriculture. Electric side-by-sides offer quiet operation and low maintenance requirements.',
            'category_id' => 24,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => '4x4',
            'description' => '4x4 side-by-sides are equipped with four-wheel drive (4WD) systems for enhanced traction and off-road performance. They are capable of traversing challenging terrain in construction, mining, and agriculture, including muddy fields, rocky trails, and steep slopes. 4x4 side-by-sides provide reliable traction and stability in various weather and ground conditions.',
            'category_id' => 24,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Heavy-Duty',
            'description' => 'Heavy-duty side-by-sides are designed for demanding work environments in construction, mining, and agriculture. They feature reinforced frames, larger cargo capacities, and powerful engines to handle heavy loads and tough conditions. Heavy-duty side-by-sides are commonly used for hauling equipment, towing trailers, and transporting personnel.',
            'category_id' => 24,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Specialized',
            'description' => 'Specialized side-by-sides are customized or purpose-built vehicles for specific applications in construction, mining, and agriculture. They may include features such as custom cargo beds, hydraulic attachments, and specialized equipment for tasks such as material handling, land maintenance, and site preparation.',
            'category_id' => 24,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Boom Sprayers',
            'description' => 'Boom sprayers are widely used for large-scale spraying in agricultural fields. They consist of a series of nozzles mounted on a boom, which is typically attached to a tractor or a self-propelled sprayer. Boom sprayers are capable of covering a wide area efficiently and are commonly used for applying pesticides, herbicides, fungicides, and fertilizers.',
            'category_id' => 25,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Airblast Sprayers',
            'description' => 'Airblast sprayers are designed to apply pesticides and fungicides to tree crops, vineyards, and orchards. They use a powerful fan to generate air flow, which carries the spray droplets into the canopy of the plants. Airblast sprayers are highly effective for targeting pests and diseases in tall or dense crops.',
            'category_id' => 25,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Handheld Sprayers',
            'description' => 'Handheld sprayers, also known as knapsack sprayers or backpack sprayers, are manually operated devices carried by the operator. They are commonly used for spot treatments, small-scale applications, or in areas where access is limited for larger machinery. Handheld sprayers are versatile and suitable for applying various types of chemicals.',
            'category_id' => 25,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Fertilizer Spreaders',
            'description' => 'Fertilizer spreaders are used to evenly distribute fertilizers, lime, and other granular materials across agricultural fields. They come in various designs, including broadcast spreaders, drop spreaders, and pendulum spreaders. Fertilizer spreaders can be mounted on tractors, ATV/UTVs, or operated manually.',
            'category_id' => 25,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Seed Spreaders',
            'description' => 'Seed spreaders, also known as seeders or broadcast seeders, are used for sowing seeds over large areas. They can distribute seeds evenly across the soil surface, ensuring optimal germination and plant growth. Seed spreaders come in different types, such as handheld seeders, mounted seeders, and tractor-mounted seeders.',
            'category_id' => 25,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Granular Applicators',
            'description' => 'Granular applicators are specialized equipment used for applying granular pesticides, herbicides, and fertilizers. They can accurately meter and distribute granular products at the desired rate, minimizing waste and ensuring precise application. Granular applicators are commonly used in row crops, vegetables, and specialty crops.',
            'category_id' => 25,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Standard',
            'description' => 'Standard telehandlers are the most common type and are widely used in both construction and agriculture. They feature a telescopic boom that can extend vertically and horizontally, allowing for precise positioning of loads at varying heights and distances. Standard telehandlers typically come with various attachments such as forks, buckets, and lifting hooks, making them suitable for a wide range of tasks.',
            'category_id' => 26,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Compact',
            'description' => 'Compact telehandlers, also known as mini telehandlers or compact loaders, are smaller and more maneuverable than standard telehandlers. They are often used in construction and agricultural settings where space is limited or access is restricted. Compact telehandlers are capable of lifting moderate loads to moderate heights and are ideal for tasks such as loading/unloading materials, transporting pallets, and light-duty lifting.',
            'category_id' => 26,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'High-Capacity',
            'description' => 'High-capacity telehandlers are designed for heavy-duty lifting and handling tasks in construction and agriculture. They have a higher lifting capacity and reach compared to standard telehandlers, allowing them to handle larger loads and reach greater heights. High-capacity telehandlers are commonly used for tasks such as lifting heavy materials, loading/unloading bulk materials, and handling large equipment.',
            'category_id' => 26,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Rotating',
            'description' => 'Rotating telehandlers, also known as telehandlers with a rotating turret or roto telehandlers, feature a rotating upper structure that allows the boom to rotate 360 degrees. This capability provides increased versatility and flexibility, allowing operators to position loads with precision in any direction. Rotating telehandlers are commonly used in construction for tasks such as material handling, lifting and placing loads in tight spaces, and working at multiple angles.',
            'category_id' => 26,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Compact Crawler',
            'description' => 'Compact crawler telehandlers combine the features of a telehandler with the mobility of a crawler undercarriage. They are equipped with tracks instead of wheels, allowing them to traverse rough terrain, steep slopes, and soft ground conditions with ease. Compact crawler telehandlers are suitable for construction and agricultural applications where traditional wheeled telehandlers may struggle to operate effectively.',
            'category_id' => 26,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Utility',
            'description' => 'Utility tractors are versatile machines designed for a wide range of tasks in both construction and agriculture. They are often equipped with a three-point hitch and power take-off (PTO) to operate various implements such as loaders, backhoes, mowers, and tillers. Utility tractors are used for tasks such as landscaping, material handling, light earthmoving, and general-purpose utility work.',
            'category_id' => 27,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Compact',
            'description' => 'Compact tractors are smaller-sized tractors ideal for use in tight spaces or on smaller properties. They are commonly used in landscaping, gardening, small-scale farming, and light construction tasks. Compact tractors are highly maneuverable and can be equipped with a variety of attachments such as front-end loaders, mowers, and backhoes.',
            'category_id' => 27,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Row Crop',
            'description' => 'Row crop tractors are designed specifically for row-crop farming, where crops are planted in rows with narrow spacing. These tractors typically have adjustable wheel widths to navigate between crop rows without damaging plants. Row crop tractors are used for tasks such as planting, cultivating, spraying, and harvesting row crops like corn, soybeans, cotton, and vegetables.',
            'category_id' => 27,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Articulated',
            'description' => 'Articulated tractors, also known as articulated steering tractors or articulated loaders, feature a jointed frame that allows the front and rear sections of the tractor to pivot independently. This design provides increased maneuverability and stability, making articulated tractors well-suited for rough terrain, steep slopes, and confined spaces. They are commonly used in construction, agriculture, forestry, and landscaping applications.',
            'category_id' => 27,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'High Horsepower',
            'description' => 'High horsepower tractors are large, powerful machines designed for heavy-duty tasks in agriculture and construction. These tractors typically have engines with higher horsepower ratings and are capable of pulling heavy implements or equipment over large areas. High horsepower tractors are used for tasks such as plowing, tilling, planting, harvesting, and pulling heavy trailers or implements.',
            'category_id' => 27,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Specialty',
            'description' => 'Specialty tractors are designed for specific applications or tasks within the construction and agricultural industries. Examples include orchard tractors for fruit tree cultivation, vineyard tractors for grape farming, and turf tractors for maintaining golf courses and sports fields. These tractors are often equipped with features and attachments tailored to their intended use.',
            'category_id' => 27,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Wheel',
            'description' => 'Wheel trenchers feature a large wheel with digging teeth or a chain attached around its circumference. They are versatile and can create trenches of varying depths and widths. Wheel trenchers are often used in open areas with relatively flat terrain.',
            'category_id' => 28,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Chain',
            'description' => 'Chain trenchers utilize a continuous digging chain with cutting teeth to excavate soil and create trenches. They are efficient for cutting through tough or rocky soil conditions. Chain trenchers are available in different sizes and configurations to accommodate various trenching requirements.',
            'category_id' => 28,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Micro',
            'description' => 'Micro trenchers are compact machines designed for creating narrow trenches with minimal surface disruption. They are commonly used for installing utility lines, such as fiber optic cables, in urban areas where space is limited. Micro trenchers can create trenches with precise dimensions and depths.',
            'category_id' => 28,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Ride-On',
            'description' => 'Ride-on trenchers are larger machines that operators can ride while trenching. They offer increased power and efficiency compared to walk-behind trenchers, making them suitable for larger-scale trenching projects in both construction and agriculture. Ride-on trenchers are available with various attachment options and can dig trenches to significant depths.',
            'category_id' => 28,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Walk-Behind',
            'description' => 'Walk-behind trenchers are compact and maneuverable machines operated by walking behind them. They are ideal for trenching in confined spaces or areas with limited access. Walk-behind trenchers are commonly used for small-scale trenching tasks in landscaping, utilities installation, and agricultural drainage.',
            'category_id' => 28,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Tractor-Mounted',
            'description' => 'Tractor-mounted trenchers are mounted on agricultural tractors or other heavy machinery. They leverage the power and versatility of tractors to dig trenches for irrigation, drainage, or utilities installation. Tractor-mounted trenchers can handle various soil conditions and are commonly used in agricultural applications.',
            'category_id' => 28,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Dump',
            'description' => 'Dump trucks are rugged vehicles designed for transporting loose materials such as sand, gravel, dirt, and rocks. They feature a hydraulically operated dump bed that can be raised at an angle to unload materials quickly and efficiently. Dump trucks are widely used in construction sites, mining operations, and agricultural settings for hauling bulk materials.',
            'category_id' => 29,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Off-Highway',
            'description' => 'Off-highway trucks, also known as haul trucks or mining trucks, are heavy-duty vehicles specifically built for off-road transportation of large quantities of materials in mining and quarrying operations. These trucks are characterized by their massive size, high payload capacity, and robust construction, allowing them to navigate rough terrain and carry heavy loads of ore, overburden, or other materials.',
            'category_id' => 29,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Water',
            'description' => 'Water trucks, also referred to as water tankers or water bowsers, are specialized vehicles equipped with large tanks for transporting and distributing water. They are commonly used in construction projects, mining sites, and agricultural operations for dust suppression, compaction, soil stabilization, and irrigation purposes. Water trucks play a vital role in maintaining proper moisture levels and controlling airborne dust in various work environments.',
            'category_id' => 29,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Flatbed',
            'description' => 'Flatbed trucks feature a flat, open cargo bed without sides or a roof, providing a versatile platform for transporting oversized or irregularly shaped loads. They are commonly used in construction, agriculture, and mining for hauling equipment, machinery, materials, and other bulky items that cannot fit inside enclosed trucks. Flatbed trucks allow for easy loading and unloading of goods using cranes, forklifts, or other handling equipment.',
            'category_id' => 29,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Utility',
            'description' => 'Utility trucks, also known as service trucks or work trucks, are multipurpose vehicles equipped with specialized tools, equipment, and compartments for performing various maintenance, repair, and servicing tasks in construction, mining, and agricultural operations. These trucks may include features such as crane arms, hydraulic lifts, storage compartments, and built-in workbenches to support a wide range of applications, including equipment maintenance, repairs, and installations.',
            'category_id' => 29,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Articulated',
            'description' => 'Articulated trucks, also called articulated haulers or articulated dump trucks, consist of a tractor unit (articulated tractor) towing a trailer with a dump bed. These trucks are commonly used in construction, mining, and quarrying operations for hauling materials over rough terrain and steep grades. Articulated trucks offer excellent maneuverability and stability, making them ideal for transporting heavy loads in challenging environments.',
            'category_id' => 29,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Tanker',
            'description' => 'Tanker trucks are vehicles equipped with tanks for transporting liquids or gases such as fuel, water, chemicals, and agricultural products. They are widely used in various industries, including construction, mining, and agriculture, for delivering bulk liquids to job sites, fueling equipment, watering crops, and transporting hazardous materials safely. Tanker trucks come in different configurations and capacities to suit specific transportation requirements and regulatory standards.',
            'category_id' => 29,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Flatbed',
            'description' => 'Flatbed wagons feature a flat, open cargo area without sides or a roof, providing a versatile platform for transporting bulky items such as equipment, materials, and machinery. They are commonly used in construction sites and agricultural settings for hauling large loads that require an open platform for easy loading and unloading.',
            'category_id' => 30,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Grain',
            'description' => 'Grain wagons are specifically designed for transporting harvested grains from fields to storage facilities or processing centers. They typically feature a high-capacity hopper or bin for holding grain and may include augers or conveyor belts for efficient loading and unloading. Grain wagons are essential equipment in agricultural operations for handling and transporting crops during harvesting seasons.',
            'category_id' => 30,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Livestock',
            'description' => 'Livestock wagons, also known as cattle wagons or livestock trailers, are specialized vehicles designed for transporting animals such as cattle, sheep, and pigs. These wagons feature partitions, gates, and ventilation systems to ensure the safe and comfortable transportation of livestock between farms, auction markets, and processing facilities. Livestock wagons play a crucial role in the agricultural industry for moving animals over long distances while minimizing stress and injury.',
            'category_id' => 30,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Utility',
            'description' => 'Utility wagons are versatile vehicles equipped with multiple compartments, racks, or attachments for carrying various tools, supplies, and equipment needed for construction, maintenance, or agricultural tasks. They may include features such as toolboxes, racks, and hitch mounts for towing additional equipment or trailers. Utility wagons are commonly used on construction sites, farms, and ranches for transporting tools, supplies, and materials to different work areas efficiently.',
            'category_id' => 30,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Hay',
            'description' => 'Hay wagons are designed for transporting bales of hay, straw, or other fodder from fields to storage barns or feeding areas. They typically feature a flatbed with high sideboards or racks to secure and stack hay bales during transport. Hay wagons may also include hydraulic or manual systems for tipping or unloading bales, making them essential equipment for haymaking and livestock feeding operations in agriculture.',
            'category_id' => 30,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Logging',
            'description' => 'Logging wagons, also called timber trailers or forestry trailers, are designed for transporting logs, lumber, or other forestry products from forests to sawmills or processing facilities. They feature sturdy frames, bunks, and securement systems to safely transport heavy loads of timber over rough terrain. Logging wagons are essential equipment in the forestry industry for harvesting and transporting timber products while minimizing environmental damage.',
            'category_id' => 30,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Wood Chippers/Shredders',
            'description' => 'Wood chippers or shredders are machines designed to reduce wood into smaller pieces or chips. They are commonly used in landscaping, construction, and agricultural settings for processing branches, logs, and other wood waste into mulch or biomass fuel. Wood chippers are used in construction for clearing land, processing wood debris, and creating mulch for landscaping projects. In mining, they may be used for processing wooden structures or materials found on-site. In agriculture, they assist in land clearing, composting, and biomass production.',
            'category_id' => 31,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Brush Chippers',
            'description' => 'Brush chippers are specialized chipping machines designed to handle branches, bushes, and other woody vegetation. They feature powerful engines and cutting mechanisms capable of processing large volumes of brush and green waste. Brush chippers are widely used in landscaping, land clearing, and forestry applications. In construction, they aid in clearing sites and processing vegetation. In agriculture, they are used for maintaining orchards, vineyards, and farm perimeters.',
            'category_id' => 31,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('sub_categories')->insert([
            'name' => 'Whole Tree Chippers',
            'description' => 'Whole tree chippers are heavy-duty machines capable of processing entire trees into wood chips. They feature large feeding systems and powerful chipping mechanisms to handle large diameter logs and tree trunks. Whole tree chippers are commonly used in forestry operations for processing harvested trees and logging residues. In construction, they are utilized for clearing land and processing timber. In agriculture, they assist in land clearing and biomass production.',
            'category_id' => 31,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
