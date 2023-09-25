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
            'name' => 'Caterpillar Inc.',
            'description' => 'Caterpillar is a renowned manufacturer of construction and mining equipment, diesel and natural gas engines, industrial gas turbines, and more.',
            'industry_ids' => '[1,2]',
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
            'name' => 'Volvo Construction Equipment',
            'description' => 'Volvo Construction Equipment produces a wide range of construction machinery, including excavators, wheel loaders, and articulated haulers.',
            'industry_ids' => '[1]',
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
            'name' => 'Joy Global Inc. (now Komatsu Mining Corp.)',
            'description' => 'Joy Global specialized in mining equipment, including underground and surface mining machinery.',
            'industry_ids' => '[2]',
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
            'name' => 'Hitachi Construction Machinery Co., Ltd.',
            'description' => 'Hitachi manufactures mining equipment, including large hydraulic excavators and dump trucks.',
            'industry_ids' => '[2]',
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
            'name' => 'John Deere',
            'description' => 'John Deere is a leading manufacturer of agricultural machinery, including tractors, combines, and farming implements.',
            'industry_ids' => '[3]',
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
            'name' => 'AGCO Corporation',
            'description' => 'AGCO manufactures agricultural equipment, including tractors, harvesting equipment, and precision farming technology.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('manufacturers')->insert([
            'name' => 'Kubota Corporation',
            'description' => 'Kubota specializes in tractors, construction equipment, and agricultural machinery.',
            'industry_ids' => '[3]',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
