<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class LeaseEquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'description' => fake()->text(),
            'manufacturer_id' => rand(1, 12),
            'category_id' => rand(1, 12),
            'sub_category_id' => rand(1, 12),
            'industry_id' => rand(1, 4),
            'year' => fake()->year(),
            'images' => json_encode([fake()->imageUrl()], true),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
            'location' => fake()->city(),
            'default_price' => fake()->numberBetween(2000, 10000),
            'pricing_type_id' => rand(1, 2),
            'min_lease_period' => rand(8, 72),
            'units' => rand(1, 100),
            'equipment_condition_id' => rand(1, 3),
            'equipment_status_id' => rand(1, 4),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
