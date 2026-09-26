<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    // mengizinkan mass assignment untuk kolom nama_produk dan status
    protected $fillable = ['nama_produk', 'status'];
}
