<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user
        User::factory()->create([
            'name' => 'Ritik',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@123'),
        ]);

       
        $this->call([
            TeacherSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
