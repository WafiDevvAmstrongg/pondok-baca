<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable =  [
        'id',
        'id_user',
        'id_buku',
        'rating',
        'komentar',
        'url_foto',
        'createdAt'
    ];

}
