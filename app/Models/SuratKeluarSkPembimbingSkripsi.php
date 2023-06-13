<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class SuratKeluarSkPembimbingSkripsi extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [
        'id_surat',
        'nomor_surat',
        'nama_mhs',
        'nim',
        'jurusan_prodi',
        'memperhatikan',
        'tanggal_surat',
        'judul_skripsi',
        'dosen_pembimbing',
        'status',
        'status_selesai',
        'tanda_tangan'
    ];

    protected $dates = ['tanggal_surat'];
}
