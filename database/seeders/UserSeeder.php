<?php

namespace Database\Seeders;

use App\Models\BusinessProfile;
use App\Models\LeaseEquipment;
use App\Models\LinkedAccount;
use App\Models\Role;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(3)->create([
            'role_id' => Role::IS_MERCHANT
        ])->each(function ($user) {
            // create user profile related to the created user
            UserProfile::factory(1)->create([
                'user_id' => $user->id,
            ]);

            // create a random BusessProfile account for this user_error
            BusinessProfile::factory(1)->create([
                'user_id' => $user->id
            ]);

            // create a random BusessProfile account for this user_error
            LeaseEquipment::factory(5)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
