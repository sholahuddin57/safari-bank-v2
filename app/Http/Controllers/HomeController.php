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
    //fungsi untuk menampilkan halaman admin
    public function admin()
    {
        // Mengambil semua data pengajuan dari database
        $data_pengajuan = Pengajuan::all() ;// Mengambil data pengajuan terbaru

        // Melempar data pengajuan ke file admin.blade.php
        return view('admin', ['pengajuans' => $data_pengajuan]);
    }

    //fungsi untuk menghapus pengajuan
    public function destroy($id) {
        // Mencari pengajuan berdasarkan ID
        $pengajuan = Pengajuan::findOrFail($id);

        // Menghapus pengajuan dari database
        $pengajuan->delete();

        // Redirect kembali ke halaman admin dengan pesan sukses
        return redirect('/admin')->with('sukses', 'Data Pengajuan berhasil dihapus dari sistem.');
    }

    //fungsi untuk memperbarui status pengajuan
    public function setujui($id) {
        // Mencari pengajuan berdasarkan ID
        $pengajuan = Pengajuan::findOrFail($id);

        // Memperbarui status pengajuan menjadi "disetujui"
        $pengajuan->status = 'disetujui';
        $pengajuan->save();

        // Redirect kembali ke halaman admin dengan pesan sukses
        return redirect('/admin')->with('sukses', 'Status pengajuan berhasil diperbarui menjadi disetujui.');
    }
}


