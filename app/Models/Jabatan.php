<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $fillable = ['nama_jabatan','deskripsi'];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}

