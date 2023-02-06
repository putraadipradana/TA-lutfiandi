<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lutfiandi',
            'email' => 'lutfiandi@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('User1234'),
            'remember_token' => Str::random(10),
        ]);
    }
}
