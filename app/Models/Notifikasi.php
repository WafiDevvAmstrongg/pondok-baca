<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_peminjaman',
        'pesan',
        'tipe',
        'is_read',
        'createdAt'
    ];
}
