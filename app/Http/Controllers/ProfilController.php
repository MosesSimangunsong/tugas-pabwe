<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Profil; // Kita nonaktifkan atau hapus baris ini jika tidak perlu

class ProfilController extends Controller
{
    public function index()
    {
        
        $data_profil_statis = (object)[
            'nama_lengkap' => 'Moses Romulus Simangunsong (Statis)',
            'bio' => 'Ini tugas PABWE.',
            'email' => '11s23011@example.com',
        ];
        
        // 2. KIRIMKAN data ini ke View dengan nama variabel 'profil' (SESUAI DENGAN VIEW ANDA)
        return view('profil.index', ['profil' => $data_profil_statis]);
    }
}