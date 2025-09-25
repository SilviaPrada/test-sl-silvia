<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jabatan;

class JabatanSeeder extends Seeder
{
    public function run(): void
    {
        Jabatan::create([
            'nama_jabatan' => 'Programmer',
            'deskripsi' => 'Membuat dan memelihara aplikasi'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'HR Officer',
            'deskripsi' => 'Mengelola administrasi karyawan'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'Finance Staff',
            'deskripsi' => 'Mengelola keuangan perusahaan'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'Ketua Departemen',
            'deskripsi' => 'Memimpin dan mengawasi jalannya departemen'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'Manager',
            'deskripsi' => 'Mengatur strategi, operasional, dan koordinasi tim'
        ]);
    }
}
