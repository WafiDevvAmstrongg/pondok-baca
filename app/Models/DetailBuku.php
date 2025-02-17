<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBuku extends Model
{
    use HasFactory;

    protected $table = 'detail_buku'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'kategori',
        'foto'
    ];

    // Relasi dengan Buku (Peminjaman)
    public function buku()
    {
        return $this->hasMany(Buku::class, 'id_buku');
    }
}
