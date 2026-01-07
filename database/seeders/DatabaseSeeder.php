<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Super Admin
        $this->call(SuperAdminSeeder::class);

        // Create sample users for testing
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'patient',
        ]);
    }
}
