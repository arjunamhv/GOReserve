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
        // $this->call(UserSeeder::class);
        // $this->call(GORSeeder::class);
        $this->call(TypeSeeder::class);
        // $this->call(FieldSeeder::class);
        $this->call(IndoRegionSeeder::class);
    }
}
