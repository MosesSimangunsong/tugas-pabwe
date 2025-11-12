<?php

namespace App\Http\Controllers;

use App\Models\Profil;

use Illuminate\Http\Request;
// ... (mungkin ada 'use App\Models\Profil;' jika Anda ikuti panduan awal)

class ProfilController extends Controller
{
    public function index()
    {
        // 2. Ambil data pertama dari tabel profils
        //    (Ini akan mengambil data "Budi Santoso" dari seeder)
        $profil = Profil::first(); 
        
        // Jika tidak ada data, buat data darurat
        if (!$profil) {
             $profil = new Profil([
                'nama_lengkap' => 'Data Tidak Ditemukan',
                'bio' => 'Silakan jalankan seeder',
                'email' => 'email@contoh.com'
            ]);
        }

        // 3. Kirim data dari database ke view
        return view('profil.index', ['profil' => $profil]);
    }
}