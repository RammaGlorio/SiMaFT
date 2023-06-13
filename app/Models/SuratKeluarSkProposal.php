<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class SuratKeluarSkProposal extends Model
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
        'sekertaris',
        'judul_skripsi',
        'dosen_penguji',
        'status',
        'status_selesai',
        'tanda_tangan'
    ];

    protected $dates = ['tanggal_surat'];
}
