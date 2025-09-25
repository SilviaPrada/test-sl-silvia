<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departemen;

class DepartemenSeeder extends Seeder
{
    public function run(): void
    {
        Departemen::create([
            'nama_departemen' => 'IT',
            'lokasi' => 'Lantai 2 - Ruang 201'
        ]);

        Departemen::create([
            'nama_departemen' => 'HRD',
            'lokasi' => 'Lantai 3 - Ruang 305'
        ]);

        Departemen::create([
            'nama_departemen' => 'Finance',
            'lokasi' => 'Lantai 4 - Ruang 410'
        ]);
    }
}
