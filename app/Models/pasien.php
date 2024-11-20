<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan (opsional jika nama tabel sesuai konvensi Laravel)
    protected $table = 'pasien';

    // Tentukan kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'rekam_medis',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'usia',
        'jenis_kelamin',
        'alamat',
    ];
}
