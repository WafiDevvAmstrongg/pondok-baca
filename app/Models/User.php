<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static array $roles = ['Admin', 'Petugas', 'User'];

    public function setRoleAttribute($value)
    {
        if (!in_array($value, self::$roles)) {
            throw new \InvalidArgumentException('Role tidak valid.');
        }
        $this->attributes['role'] = $value;
    }

    public function getRoleAttribute($value)
    {
        return ucfirst($value);
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
