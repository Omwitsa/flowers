<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Constants\Roles;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Administrator',
            'usercode' => 'Admin',
            'password' => Hash::make('sysadmin'),
            'email' => 'itsupport@aaagrowers.co.ke',
            'role' => Roles::ADMIN->value,
        ]);
    }
}
