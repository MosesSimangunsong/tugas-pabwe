<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Tambahkan ini
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory; // Tambahkan ini

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // Tambahkan properti $fillable ini
    protected $fillable = [
        'nama_lengkap',
        'bio',
        'email',
    ];
}