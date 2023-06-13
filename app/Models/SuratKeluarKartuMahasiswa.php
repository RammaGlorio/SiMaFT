<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class SuratKeluarKartuMahasiswa extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [
        'id_surat',
        'nomor_surat',
        'nama_mhs',
        'nim',
        'jurusan_prodi',
        'status',
        'status_selesai',
        'tanda_tangan'
    ];
}
