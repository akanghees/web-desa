<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayananSurat extends Model
{
    protected $table = 'layanan_surat';

    protected $fillable = [
        'nama_layanan',
        'deskripsi',
        'persyaratan',
        'format_file',
    ];

    public function permohonanSurat()
    {
        return $this->hasMany(
            PermohonanSurat::class,
            'layanan_id'
        );
    }
}
