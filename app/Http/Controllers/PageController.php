<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(Request $request){
        $username = $request->query('Username');
        $title = 'Dashboard';

        $tasks = [
            ['judul' => 'Metopen', 'status' => 'Sudah Dikumpul'],
            ['judul' => 'Basda', 'status' => 'Belum Dikumpul'],
            ['judul' => 'Oleh Oleh', 'status' => 'Sudah Dikumpul'],
            ['judul' => 'Kwu', 'status' => 'Belum Dikumpul']
        ];

        $total = count($tasks);
        $selesai = collect($tasks)->where('status', 'Sudah Dikumpul')->count();
        $belum = $total - $selesai;

        return view('dashboard', compact('title', 'username', 'total', 'selesai', 'belum'));
    }

    public function pengelolaan() {
    $title = 'Pengelolaan Tugas';

    $tasks = [
        ['judul' => 'Tugas Pemrograman Web', 'deadline' => '2025-10-28', 'status' => 'Belum Dikumpul'],
        ['judul' => 'Tugas Basis Data', 'deadline' => '2025-10-25', 'status' => 'Sudah Dikumpul'],
        ['judul' => 'Tugas Sistem Operasi', 'deadline' => '2025-10-30', 'status' => 'Belum Dikumpul'],
        ['judul' => 'Tugas KWU BMC', 'deadline' => '2025-10-29', 'status' => 'Sudah Dikumpul']
    ];

    return view('pengelolaan', compact('title', 'tasks'));
}

    public function profil(Request $request) {
    $title = 'Profil';
    $username = $request->query('username') ?? 'Mahasiswa';
    $nim = '242410102030';
    $prodi = 'Teknologi Informasi';
    $email = strtolower($username) . '@unej.ac.id';

    return view('profil', compact('title', 'username', 'nim', 'prodi', 'email'));
}


}