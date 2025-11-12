<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ... (mungkin ada 'use App\Models\Profil;' jika Anda ikuti panduan awal)

class ProfilController extends Controller
{
    public function index()
    {
        // Data statis yang Anda buat kemarin
        $data = [
            'nama_lengkap' => 'Nama Anda Di Sini',
            'bio' => 'Ini adalah bio singkat profil saya.',
            'email' => 'email@anda.com'
        ];

        return view('profil.index', ['profil' => $data]);
    }
}