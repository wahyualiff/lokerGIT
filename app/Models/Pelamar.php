<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;

    protected $table = 'pelamar';
    protected $fillable = ['name', 'alamat', 'kota', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'status', 'email', 'telepon', 'pendidikan', 'tempat_pendidikan', 'tempat_kerja_terakhir', 'pekerjaan_bekerja_terakhir'];
}
