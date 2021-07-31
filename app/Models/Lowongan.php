<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $table = 'lowongan';
    protected $fillable = ['gambar', 'perusahaan', 'email', 'judul', 'alamat', 'telepon', 'kota', 'kategori', 'deskripsi', 'tgl_buka', 'tgl_tutup'];
}
