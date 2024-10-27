<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default user manufacturers to be used on the platform
        DB::table('manufacturers')->insert([
            'name' => 'AGCO Corporation',
            'description' => 'AGCO manufactures agricultural equipment, including tractors, harvesting equipment, and precision farming technology.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'AGROTK',
            'description' => 'AGROTK produces agricultural machinery and equipment, specializing in tractors, tillage equipment, and harvesting machinery.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'AGT',
            'description' => 'AGT manufactures agricultural machinery and implements, including tractors, plows, and seeding equipment.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Airman',
            'description' => 'Airman specializes in manufacturing air compressors and generators for various industrial and construction applications.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Atlas Copco',
            'description' => 'Atlas Copco provides mining and rock excavation equipment, industrial tools, and assembly systems.',
            'industry_ids' => '[2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Avant',
            'description' => 'Avant manufactures compact loaders and attachments for various applications, including landscaping, construction, and agriculture.',
            'industry_ids' => '[1,3,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Barford',
            'description' => 'Barford produces construction equipment, including dumpers and rollers, known for their durability and performance on job sites.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Barreto',
            'description' => 'Barreto manufactures compact trenchers and other landscaping equipment designed for efficient and precise digging in tight spaces.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Baumalight',
            'description' => 'Baumalight specializes in forestry and land clearing equipment, including brush chippers, stump grinders, and mulchers.',
            'industry_ids' => '[2,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Bell',
            'description' => 'Bell manufactures heavy equipment for the construction and mining industries, including articulated dump trucks and wheel loaders.',
            'industry_ids' => '[1,2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Bil-Jax',
            'description' => 'Bil-Jax produces aerial work platforms and scaffolding equipment, offering safe and efficient solutions for working at height.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Bobcat Company',
            'description' => 'Bobcat is an American-based manufacturer of compact equipment for construction, landscaping, agriculture, and other industries.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Bomag',
            'description' => 'Bomag manufactures compaction equipment for road construction and maintenance, including vibratory rollers and soil compactors, renowned for their quality and performance in achieving proper compaction levels.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Boleo',
            'description' => 'Boleo produces mining equipment and machinery for excavation and material handling operations.',
            'industry_ids' => '[2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Bray',
            'description' => 'Bray manufactures valves and flow control products for various industries, including oil and gas, water treatment, and chemical processing.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Cast',
            'description' => 'Cast produces agricultural equipment and implements for farming and land management purposes.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Case',
            'description' => 'Case manufactures construction and agricultural equipment, including loaders, excavators, tractors, and combines.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Caterpillar Inc.',
            'description' => 'Caterpillar is a renowned manufacturer of construction and mining equipment, diesel and natural gas engines, industrial gas turbines, and more.',
            'industry_ids' => '[1,2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Challenger',
            'description' => 'Challenger produces agricultural tractors and machinery for farming operations, known for their power, efficiency, and advanced technology.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Chicago Pneumatic',
            'description' => 'Chicago Pneumatic manufactures air compressors, pneumatic tools, and generators for construction, manufacturing, and industrial applications.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Coleman',
            'description' => 'Coleman produces outdoor and recreational equipment, including camping gear, tents, coolers, and lanterns.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'CNH Industrial (Case IH and New Holland)',
            'description' => 'CNH Industrial produces a wide range of agricultural equipment and vehicles under brands like Case IH and New Holland',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Crown',
            'description' => 'Crown manufactures material handling equipment, including forklifts, pallet jacks, and order pickers, for warehousing and distribution applications.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Cummins',
            'description' => 'Cummins manufactures engines and power generation equipment for automotive, industrial, marine, and standby power applications.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Delta',
            'description' => 'Delta produces power tools and woodworking machinery for professional woodworking, carpentry, and construction applications.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Ditch Witch',
            'description' => 'Ditch Witch manufactures underground construction equipment, including trenchers, directional drills, and vacuum excavators, for the installation and maintenance of buried utilities.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'DLK',
            'description' => 'DLK produces construction machinery attachments and accessories, specializing in buckets, thumbs, rippers, and other excavator attachments for earthmoving and material handling applications.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Dressta',
            'description' => 'Dressta manufactures crawler dozers and pipelayers, designed for heavy-duty earthmoving and construction tasks in various terrains and conditions.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Doosan',
            'description' => 'Doosan produces construction equipment, including excavators, wheel loaders, articulated dump trucks, and compactors, known for their durability, performance, and reliability in demanding job sites.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Dynapac',
            'description' => 'Dynapac manufactures compaction and paving equipment for road construction and maintenance, including vibratory rollers, soil compactors, and asphalt pavers, known for their efficiency and quality in achieving smooth and durable surfaces.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Energreen',
            'description' => 'Energreen specializes in vegetation management and land clearing equipment, including remote-controlled and self-propelled mulchers and mowers, designed for efficient and eco-friendly maintenance of green areas and landscapes.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Extec',
            'description' => 'Extec produces mobile crushers and screeners for the construction industry, providing solutions for processing aggregates, concrete, asphalt, and demolition debris, known for their reliability, performance, and versatility in various crushing and screening applications.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'FiveStar',
            'description' => 'FiveStar manufactures trailers and towing equipment for commercial and recreational use, including utility trailers, car haulers, dump trailers, and equipment trailers, known for their durability, versatility, and safety features.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Ford',
            'description' => 'Ford produces automobiles, trucks, and commercial vehicles for personal and business use, offering a wide range of models known for their performance, reliability, and innovation.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Freightliner',
            'description' => 'Freightliner manufactures heavy-duty trucks for long-haul transportation, including semi-trucks, vocational trucks, and specialized vehicles, known for their durability, fuel efficiency, and driver comfort.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Gallas Ledwell',
            'description' => 'Gallas Ledwell manufactures custom truck bodies and trailers for commercial and industrial use, offering specialized solutions for transporting goods, equipment, and materials, known for their quality craftsmanship and durability.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Gehl',
            'description' => 'Gehl produces compact equipment for construction and agriculture, including skid steer loaders, compact track loaders, and telescopic handlers, known for their versatility, performance, and ease of operation in various applications.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Generac',
            'description' => 'Generac manufactures power generators and backup power solutions for residential, commercial, and industrial applications, offering reliable and efficient solutions for emergency and standby power needs.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Genie',
            'description' => 'Genie produces aerial work platforms and material lifting equipment for construction, maintenance, and industrial applications, offering a wide range of models including scissor lifts, boom lifts, and telehandlers, known for their reliability, safety features, and ease of use.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Grove',
            'description' => 'Grove manufactures mobile cranes and lifting solutions for construction, infrastructure, and industrial projects, offering a variety of models including rough terrain cranes, all-terrain cranes, and truck-mounted cranes, known for their robustness, versatility, and lifting capacity.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Gradall',
            'description' => 'Gradall produces excavators and material handlers for construction, highway maintenance, and railroad applications, offering versatile machines with telescoping booms for reaching and handling materials in various job site conditions, known for their efficiency, durability, and performance.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Hamn',
            'description' => 'Hamn produces marine and offshore equipment, including winches, cranes, and deck machinery for ships, rigs, and offshore installations, known for their quality, reliability, and performance in harsh marine environments.',
            'industry_ids' => '[2,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Hannan',
            'description' => 'Hannan manufactures material handling and storage solutions, including pallet racks, shelving systems, and warehouse equipment, offering efficient and space-saving solutions for organizing and managing inventory in industrial and commercial facilities.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Haulotte',
            'description' => 'Haulotte manufactures aerial work platforms, scissor lifts, and telescopic boom lifts for construction, maintenance, and industrial applications, offering safe and efficient solutions for working at height in various environments.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Hawke',
            'description' => 'Hawke produces truck and trailer components, including lighting, electrical, and braking systems, offering reliable and durable solutions for commercial and industrial vehicles, known for their performance, safety, and compliance with industry standards.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Hitachi Construction Machinery Co., Ltd.',
            'description' => 'Hitachi manufactures mining equipment, including large hydraulic excavators and dump trucks.',
            'industry_ids' => '[2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Honda',
            'description' => 'Honda manufactures automobiles, motorcycles, and power equipment for personal and commercial use, offering a wide range of models known for their performance, fuel efficiency, and reliability, across various industries including automotive, powersports, and outdoor power equipment.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Hyster',
            'description' => 'Hyster manufactures forklifts and material handling equipment for various industries, including warehousing, logistics, and manufacturing, offering a wide range of models known for their durability, reliability, and performance in demanding environments.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Hyundai',
            'description' => 'Hyundai manufactures automobiles, construction equipment, and industrial machinery, offering a diverse range of products known for their quality, innovation, and value across multiple industries worldwide.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Infront',
            'description' => 'Infront produces agricultural equipment and machinery for farming and land management applications, offering solutions such as plows, harrows, and planters known for their efficiency, reliability, and performance in various agricultural tasks.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Industrial',
            'description' => 'Industrial produces heavy machinery and equipment for various industrial applications, including manufacturing, construction, and mining, offering robust and reliable solutions for demanding work environments.',
            'industry_ids' => '[1,2,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Ingersoll Rand',
            'description' => 'Ingersoll Rand manufactures air compressors, power tools, and material handling equipment for construction, manufacturing, and industrial applications, offering reliable and efficient solutions for improving productivity and performance in various work environments.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'International',
            'description' => 'International produces trucks and commercial vehicles for various applications, including long-haul transportation, construction, and emergency services, offering a range of models known for their durability, performance, and versatility.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'IHI',
            'description' => 'IHI manufactures construction equipment, including mini excavators and crawler cranes, offering compact and versatile machines known for their efficiency, maneuverability, and reliability in tight spaces and challenging job sites.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Jarraf',
            'description' => 'Jarraf produces specialized forestry equipment and machinery, including mulchers and tree trimmers, designed for vegetation management and land clearing applications in forestry and land management operations.',
            'industry_ids' => '[2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'JCB (Joseph Cyril Bamford)',
            'description' => 'JCB is a British multinational corporation specializing in manufacturing equipment for construction, agriculture, waste handling, and demolition.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'JLG',
            'description' => 'JLG manufactures aerial work platforms and material handling equipment, including boom lifts, scissor lifts, and telehandlers, offering innovative and reliable solutions for construction, maintenance, and industrial applications.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'John Deere',
            'description' => 'John Deere is a leading manufacturer of agricultural machinery, including tractors, combines, and farming implements.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Joy Global Inc. (now Komatsu Mining Corp.)',
            'description' => 'Joy Global specialized in mining equipment, including underground and surface mining machinery.',
            'industry_ids' => '[2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Kalamar Ottawa',
            'description' => 'Kalamar Ottawa produces terminal tractors and yard trucks for port, warehouse, and distribution center operations, offering efficient and durable solutions for moving trailers and containers within confined spaces.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Kawasaki',
            'description' => 'Kawasaki manufactures motorcycles, ATVs, and utility vehicles for recreational and utility use, offering reliable and performance-oriented products known for their power, durability, and versatility in various outdoor activities.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Kenworth',
            'description' => 'Kenworth produces heavy-duty trucks for long-haul transportation and vocational applications, offering a range of models known for their durability, reliability, and performance in demanding operating conditions.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Kobelco',
            'description' => 'Kobelco manufactures excavators and construction machinery for various applications, offering a wide range of models known for their durability, performance, and fuel efficiency in excavation, demolition, and material handling tasks.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Komatsu Ltd.',
            'description' => 'Komatsu is a global leader in the manufacture of construction and mining equipment, industrial machinery, and forklift trucks',
            'industry_ids' => '[1,2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'K-Tec',
            'description' => 'K-Tec manufactures earthmoving equipment, including scrapers and land levelers, offering efficient and high-capacity solutions for large-scale earthmoving and construction projects.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Kubota Corporation',
            'description' => 'Kubota specializes in tractors, construction equipment, and agricultural machinery.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Laurini',
            'description' => 'Laurini manufactures pipeline equipment and machinery for trenchless construction and installation of underground pipelines, offering specialized solutions for pipeline laying, tunneling, and microtunneling projects.',
            'industry_ids' => '[1,2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Lee-Boy',
            'description' => 'Lee-Boy produces asphalt paving equipment and road construction machinery, including asphalt pavers, motor graders, and force feed loaders, known for their reliability, precision, and performance in paving and road maintenance applications.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Lemtrac',
            'description' => 'Lemtrac manufactures compact track loaders and skid steer loaders for construction, landscaping, and agricultural applications, offering versatile and maneuverable machines known for their performance, reliability, and ease of operation in tight spaces.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Liebherr Group',
            'description' => 'Liebherr manufactures construction equipment such as cranes, earthmoving machines, and mining trucks.',
            'industry_ids' => '[1,2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Link-Belt',
            'description' => 'Link-Belt manufactures cranes and material handling equipment for construction, infrastructure, and industrial projects, offering a variety of models including lattice boom crawlers, telescopic crawlers, and rough terrain cranes, known for their reliability, versatility, and lifting capacity.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'LiuGong',
            'description' => 'LiuGong manufactures construction equipment, including excavators, wheel loaders, and bulldozers, offering robust and efficient machines known for their performance, reliability, and value in various construction and earthmoving applications.',
            'industry_ids' => '[1,2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Lull',
            'description' => 'Lull manufactures telehandlers and material handling equipment for construction, industrial, and agricultural applications, offering versatile and high-reach machines known for their stability, precision, and ease of operation in various job site conditions.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Magni',
            'description' => 'Magni manufactures telescopic handlers and rotating telehandlers for construction and industrial applications, offering high-performance machines known for their versatility, reach, and lifting capacity in handling materials and equipment at height.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Magnum',
            'description' => 'Magnum produces portable generators and light towers for construction, events, and emergency backup power, offering reliable and efficient solutions for powering equipment and illuminating job sites in various industries.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Mahindra',
            'description' => 'Mahindra manufactures tractors, utility vehicles, and agricultural machinery for farming and rural applications, offering durable and efficient solutions known for their performance, versatility, and value in various agricultural tasks.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Mack',
            'description' => 'Mack Trucks manufactures heavy-duty trucks and vocational vehicles for construction, transportation, and public works applications, offering durable and reliable solutions known for their power, durability, and ruggedness in demanding operating conditions.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Manitou',
            'description' => 'Manitou manufactures material handling equipment, including telehandlers, forklifts, and aerial work platforms, offering versatile and high-performance machines known for their efficiency, agility, and safety features in various industries.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Massey Ferguson',
            'description' => 'Massey Ferguson manufactures agricultural machinery and equipment, including tractors, combines, and hay tools, offering reliable and efficient solutions known for their performance, durability, and innovation in modern farming practices.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'McClosey',
            'description' => 'McClosey produces agricultural machinery and equipment, including cultivators, planters, and harvesters, offering reliable and efficient solutions for various farming tasks and crop production operations.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Mega',
            'description' => 'Mega manufactures wheel loaders and construction equipment for various applications, offering robust and reliable machines known for their performance, durability, and efficiency in handling materials and earthmoving tasks.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Mitsubishi',
            'description' => 'Mitsubishi produces automobiles, construction machinery, and industrial equipment, offering a diverse range of products known for their quality, performance, and innovation in various industries worldwide.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Morroka',
            'description' => 'Morroka manufactures dump trucks and off-road vehicles for mining, construction, and industrial applications, offering durable and high-capacity machines known for their reliability, performance, and versatility in rugged environments.',
            'industry_ids' => '[2,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Multiquip',
            'description' => 'Multiquip manufactures construction and industrial equipment, including concrete mixers, power trowels, and light towers, offering reliable and efficient solutions for concrete and construction contractors.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'New Holland',
            'description' => 'New Holland manufactures agricultural machinery and equipment, including tractors, harvesters, and hay tools, offering innovative and efficient solutions known for their performance, reliability, and productivity in modern farming operations.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'NiftyLift',
            'description' => 'NiftyLift manufactures aerial work platforms and cherry pickers for construction, maintenance, and utility applications, offering a range of models known for their versatility, safety features, and ease of use in accessing elevated work areas.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'NorAm',
            'description' => 'NorAm manufactures motor graders and road maintenance equipment for construction and municipal applications, offering durable and efficient machines known for their performance, precision, and reliability in grading and road maintenance tasks.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Onyx',
            'description' => 'Onyx produces waste management equipment and recycling machinery for municipal and industrial applications, offering a range of solutions for waste collection, processing, and disposal, known for their efficiency, reliability, and environmental sustainability.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Palazani',
            'description' => 'Palazani manufactures spider lifts and tracked access platforms for construction, maintenance, and tree care applications, offering compact and versatile machines known for their stability, reach, and maneuverability in accessing elevated work areas.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Peterbilt',
            'description' => 'Peterbilt manufactures heavy-duty trucks and vocational vehicles for transportation and commercial applications, offering a range of models known for their durability, reliability, and performance in various hauling and vocational tasks.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Pitbull',
            'description' => 'Pitbull manufactures screening and crushing equipment for recycling and construction applications, offering efficient and robust machines known for their performance, versatility, and reliability in processing various materials.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'PJ',
            'description' => 'PJ produces trailers and utility vehicles for commercial and recreational use, including flatbed trailers, dump trailers, and equipment haulers, known for their durability, versatility, and customization options to meet specific hauling needs.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Polaris',
            'description' => 'Polaris manufactures off-road vehicles, including ATVs, side-by-sides, and snowmobiles, offering rugged and versatile machines known for their performance, durability, and innovation in outdoor recreational activities.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Rayco',
            'description' => 'Rayco manufactures stump grinders, brush chippers, and forestry equipment for tree care and land clearing applications, offering efficient and durable solutions known for their performance, reliability, and productivity in forestry operations.',
            'industry_ids' => '[2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Sandvik AB',
            'description' => 'Sandvik is a global supplier of mining and rock excavation equipment, tools, and services.',
            'industry_ids' => '[2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Sany',
            'description' => 'Sany manufactures construction machinery and equipment, including excavators, cranes, and concrete machinery, offering a wide range of models known for their quality, innovation, and advanced technology in various construction applications.',
            'industry_ids' => '[1,2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Sakai',
            'description' => 'Sakai manufactures vibratory soil compactors, asphalt rollers, and road maintenance equipment for construction and roadbuilding applications, offering durable and high-performance machines known for their compaction efficiency and reliability.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Sellick',
            'description' => 'Sellick manufactures rough terrain forklifts and material handling equipment for construction, agriculture, and industrial applications, offering durable and versatile machines known for their performance, reliability, and maneuverability in rough terrain conditions.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Skyjack',
            'description' => 'Skyjack manufactures aerial work platforms and scissor lifts for construction, maintenance, and industrial applications, offering reliable and easy-to-use machines known for their safety features, durability, and accessibility in elevated work areas.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Snorkel',
            'description' => 'Snorkel manufactures aerial work platforms, telehandlers, and material lifts for construction, maintenance, and industrial applications, offering innovative and reliable solutions for accessing elevated work areas and handling materials.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Subaru',
            'description' => 'Subaru manufactures automobiles, generators, and power equipment for personal and commercial use, offering reliable and fuel-efficient products known for their performance, durability, and versatility in various applications.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Sunward',
            'description' => 'Sunward manufactures excavators and construction machinery for various applications, offering reliable and efficient machines known for their performance, durability, and advanced technology in excavation and earthmoving tasks.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Superior',
            'description' => 'Superior manufactures conveyor systems and material handling equipment for mining, aggregate, and bulk material handling industries, offering innovative and reliable solutions for transporting and processing materials efficiently.',
            'industry_ids' => '[2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'SWECO',
            'description' => 'SWECO manufactures separation equipment and vibrating screens for various industries, including pharmaceuticals, food and beverage, and minerals processing, offering efficient and reliable solutions for particle size separation and material classification.',
            'industry_ids' => '[2,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Takeuchi',
            'description' => 'Takeuchi manufactures compact construction equipment, including compact track loaders, compact excavators, and compact wheel loaders, offering versatile and durable machines known for their performance, reliability, and ease of operation in tight spaces.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Terramite',
            'description' => 'Terramite manufactures compact earthmoving equipment, including backhoe loaders and compact utility loaders, offering versatile and reliable machines known for their performance, maneuverability, and ease of operation in landscaping and construction tasks.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Terex',
            'description' => 'Terex manufactures construction equipment and material handling machinery, including cranes, aerial work platforms, and material handlers, offering a wide range of models known for their reliability, versatility, and performance in various construction and industrial applications.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Thomas',
            'description' => 'Thomas manufactures compact skid steer loaders and attachments for construction, landscaping, and agriculture applications, offering versatile and efficient machines known for their performance, durability, and ease of operation in tight spaces.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Toyota',
            'description' => 'Toyota manufactures automobiles, industrial equipment, and material handling machinery, offering a wide range of products known for their quality, reliability, and innovation in various industries worldwide.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Vermeer',
            'description' => 'Vermeer manufactures agricultural and construction equipment, including hay tools, trenchers, and horizontal directional drills, offering innovative and reliable solutions for farming, landscaping, and utility installation applications.',
            'industry_ids' => '[1,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Viper',
            'description' => 'Viper manufactures floor cleaning equipment and industrial scrubbers for commercial and industrial applications, offering efficient and durable machines known for their performance, reliability, and ease of use in maintaining clean and safe environments.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Volvo Construction Equipment',
            'description' => 'Volvo Construction Equipment produces a wide range of construction machinery, including excavators, wheel loaders, and articulated haulers.',
            'industry_ids' => '[1]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Wacker Neuson',
            'description' => 'Wacker Neuson manufactures construction equipment and compact machinery, including vibratory plates, concrete vibrators, and compact excavators, offering high-quality and efficient solutions for construction, landscaping, and utility work.',
            'industry_ids' => '[1,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'XMG',
            'description' => 'XMG manufactures drilling and foundation equipment for construction, mining, and geotechnical engineering applications, offering specialized solutions for drilling, pile driving, and foundation construction projects.',
            'industry_ids' => '[1,2]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Xtreme',
            'description' => 'Xtreme manufactures telehandlers and material handling equipment for construction, industrial, and agricultural applications, offering versatile and high-performance machines known for their reach, capacity, and reliability in handling materials and equipment.',
            'industry_ids' => '[1,3,4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Yale',
            'description' => 'Yale manufactures forklifts and material handling equipment for warehouse, distribution, and industrial applications, offering a range of models known for their durability, reliability, and performance in material handling tasks.',
            'industry_ids' => '[4]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Yanmar',
            'description' => 'Yanmar is a Japanese company with a long history in manufacturing engines, agricultural machinery, construction equipment, and marine propulsion systems.',
            'industry_ids' => '[1,2,3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
