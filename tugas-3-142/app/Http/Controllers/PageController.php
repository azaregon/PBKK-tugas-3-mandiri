<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Halaman Beranda ('/')
     * Challenge 2: menampilkan sapaan dinamis lewat ?user=Nama
     */
    public function beranda(Request $request)
    {
        // Ambil parameter 'user' dari query string, default null jika tidak ada
        $user = $request->query('user');

        return view('beranda', compact('user'));
    }

    /**
     * Halaman Profil Mahasiswa ('/profil-mahasiswa')
     * Menggunakan compact() untuk mengirim data ke komponen <x-info-card>
     */
    public function profil()
    {
        $nama   = 'Ahmad Budi Santoso';
        $nrp    = '5025211000';
        $prodi  = 'Teknik Informatika';
        $email  = 'ahmad.budi@mhs.its.ac.id';
        $aktif  = true;

        $mataKuliah = ['PBKK', 'Grafika Komputer', 'Sistem Terdistribusi'];

        return view('profil-mahasiswa', compact(
            'nama', 'nrp', 'prodi', 'email', 'aktif', 'mataKuliah'
        ));
    }

    /**
     * Halaman Ide Riset / Agentic AI ('/ide-agent')
     * Challenge 1: menerapkan dark mode lewat ?mode=dark
     */
    public function ideAgent(Request $request)
    {
        $mode = $request->query('mode', 'light'); // 'light' (default) atau 'dark'

        $proyek = [
            ['nama' => 'Agentic AI Scheduler',   'deskripsi' => 'Asisten penjadwalan kuliah otomatis berbasis LLM'],
            ['nama' => 'Riset Vision Transformer', 'deskripsi' => 'Klasifikasi citra medis untuk deteksi dini penyakit'],
            ['nama' => 'Chatbot Akademik ITS',    'deskripsi' => 'Chatbot FAQ akademik terintegrasi myITS'],
        ];

        return view('ide-agent', compact('mode', 'proyek'));
    }
}
