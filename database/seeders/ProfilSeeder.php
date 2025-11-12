<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profil;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 3. Masukkan data contoh
        DB::table('profils')->insert([
            'nama_lengkap' => 'Budi Santoso',
            'bio' => 'Seorang mahasiswa yang sedang belajar Laravel.',
            'email' => 'budi@contoh.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Anda bisa tambahkan data lain
//         DB::table('profils')->insert([
//             'nama_lengkap' => 'Budi Santoso',
//             'bio' => 'Seorang mahasiswa yang sedang belajar Laravel.',
//             'email' => 'budi@contoh.com',
// ]);
    }
}