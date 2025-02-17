<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'id_user',
        'id_buku',
        'id_staff',
        'tgl_pinjam',
        'tgl_kembali',
        'tgl_dikembalikan',
        'status',
        'jumlah_denda',
        'is_denda_dibayar',
        'created_at',
        'updated_at'
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi dengan Staff
    public function staff()
    {
        return $this->belongsTo(User::class, 'id_staff');
    }

    // Relasi dengan Buku Detail
    public function detail()
    {
        return $this->belongsTo(DetailBuku::class, 'id_buku');
    }
}
