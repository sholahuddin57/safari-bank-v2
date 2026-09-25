<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
