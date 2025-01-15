<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'penulis',
        'isbn',
        'kategori',
        'deskripsi',
        'cover_img',
        'stock',
        'denda_harian',
        'penerbit',
        'tahun_terbit',
        'createadAt'
    ];
}
