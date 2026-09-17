<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'kategori_id',
        'judul',
        'slug',
        'isi',
        'gambar',
        'status',
    ];

    public function kategori()
    {
        return $this->belongsTo(
            KategoriBerita::class,
            'kategori_id'
        );
    }

    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,
            'berita_tag',
            'berita_id',
            'tag_id'
        )->withTimestamps();
    }
}
