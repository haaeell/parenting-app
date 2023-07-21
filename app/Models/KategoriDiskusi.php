<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriDiskusi extends Model
{
    use HasFactory;
    protected $table = 'kategori_diskusi';

    protected $fillable = [
        'name',
        'description',
    ];

    // Relasi dengan model Discussion
    public function discussions()
    {
        return $this->hasMany(Discussion::class, 'category_id');
    }
}
