<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
        User::create(
            [
                'email' => 'dosen@lecturer.telkomuniversity.ac.id',
                'name' => 'Dosen TUJ',
                'password' => Hash::make('dosen123'),
                'role' => 'dosen',
                'nomor_induk' => '123456789',
            ]
        );
        
        User::create(
            [
                'email' => 'mahasiswa@student.telkomuniversity.ac.id',
                'name' => 'Mahasiswa TUJ',
                'password' => Hash::make('mahasiswa123'),
                'role' => 'mahasiswa',
                'nomor_induk' => '102042500018',
            ]
        );
    }
}
