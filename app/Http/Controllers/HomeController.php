<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan; // wajib menambahkan ini agar bisa menggunakan model Pengajuan

class HomeController extends Controller
{
    public function index()
    {
        // Menyiapkan data dinamis
        $data = [
            'nama_admin' => 'Muhammad Sholahuddin',
            'jabatan' => 'IT Infrastructure & Frontend Developer',
        ];
        // Melempar data tersebut ke file welcome.blade.php
        return view('welcome', $data);
    }

    //fungsi untuk menyimpan pengajuan baru
    public function store(Request $request)
    {
        // Menyimpan data ke database
        Pengajuan::create([
            'nama_produk' => $request->nama_produk,
        ]);

        // Redirect kembali ke halaman utama dengan pesan sukses
        return redirect('/')->with('sukses', 'Selamat! Pengajuan anda telah berhasil dikirim. Silakan tunggu konfirmasi dari kami.');
    }
}


