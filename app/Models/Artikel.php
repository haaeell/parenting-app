<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikel';

    protected $fillable = [
        'judul', 
        'konten', 
        'penulis', 
        'tanggal_publikasi',
    ];

    // Jika tidak menggunakan kolom timestamps (created_at dan updated_at), maka tambahkan ini:
    public $timestamps = false;
}
