<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;

class PegawaiSeeder extends Seeder
{
    public function run(): void
    {
        Pegawai::create([
            'nama' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'alamat' => 'Jl. Merdeka No. 10',
            'tanggal_lahir' => '1990-05-20',
            'jabatan_id' => 1, 
            'departemen_id' => 1 
        ]);

        Pegawai::create([
            'nama' => 'Siti Aminah',
            'email' => 'siti@example.com',
            'alamat' => 'Jl. Sudirman No. 22',
            'tanggal_lahir' => '1992-11-15',
            'jabatan_id' => 2, 
            'departemen_id' => 2 
        ]);

        Pegawai::create([
            'nama' => 'Andi Wijaya',
            'email' => 'andi@example.com',
            'alamat' => 'Jl. Diponegoro No. 45',
            'tanggal_lahir' => '1988-03-10',
            'jabatan_id' => 3, 
            'departemen_id' => 3 
        ]);

        Pegawai::create([
            'nama' => 'Rina Kartika',
            'email' => 'rina.it@example.com',
            'alamat' => 'Jl. Gatot Subroto No. 12',
            'tanggal_lahir' => '1985-07-12',
            'jabatan_id' => 4, 
            'departemen_id' => 1 
        ]);

        Pegawai::create([
            'nama' => 'Agus Prasetyo',
            'email' => 'agus.hrd@example.com',
            'alamat' => 'Jl. Veteran No. 8',
            'tanggal_lahir' => '1987-02-05',
            'jabatan_id' => 5, 
            'departemen_id' => 2 
        ]);


        Pegawai::create([
            'nama' => 'Dewi Lestari',
            'email' => 'dewi.finance@example.com',
            'alamat' => 'Jl. Rajawali No. 19',
            'tanggal_lahir' => '1984-09-30',
            'jabatan_id' => 4, 
            'departemen_id' => 3 
        ]);
    }
}
