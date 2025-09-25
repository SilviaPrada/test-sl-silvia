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
        // Panggil semua seeder di sini
        $this->call([
            DepartemenSeeder::class,
            JabatanSeeder::class,
            PegawaiSeeder::class,
        ]);
    }
}
