<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $fillable = ['nama_departemen','lokasi'];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}

