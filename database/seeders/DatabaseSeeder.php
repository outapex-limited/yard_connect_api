<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            // to be seeded if the environment is develop
            AccountStatusSeeder::class,
            AttachmentConditionSeeder::class,
            AttachmentSeeder::class,
            CategorySeeder::class,
            EquipmentConditionSeeder::class,
            EquipmentStatusSeeder::class,
            GenderSeeder::class,
            IndustrySeeder::class,
            ManufacturerSeeder::class,
            PricingTypeSeeder::class,
            RoleSeeder::class,
            SubCategorySeeder::class,
        ]);
    }
}
