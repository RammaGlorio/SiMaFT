<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class SuratMasukUmum extends Model
{

    use HasFactory, Uuid;

    protected $fillable = ['no_surat_masuk',
                            'tanggal_terima',
                            'tanggal_surat',
                            'pengirim',
                            'perihal_surat',
                            'jenis_surat',
                            'sifat_surat',
                            'scan_file_surat',
                            'status',
                            // 'disposisi_1',
                            'disposisi_pd',
                            // 'disposisi_3'
                        ];

    protected $dates = ['tanggal_terima', 'tanggal_surat'];
 
    //relasi dengan tabel surat keluar kartu mahasiswa
    public function kartuMahasiswa()
    {
        return $this->hasMany(SuratKeluarKartuMahasiswa::class, 'id_surat', 'id');
    }

    //relasi dengan tabel surat keluar sk proposal
    public function skProposal()
    {
        return $this->hasMany(SuratKeluarSkProposal::class, 'id_surat', 'id');
    }

    //relasi dengan tabel surat keluar sk ujian hasil
    public function skUjianHasil()
    {
        return $this->hasMany(SuratKeluarSkUjianHasil::class, 'id_surat', 'id');
    }

    //relasi dengan tabel surat keluar sk pembimbing skripsi
    public function skPembimbingSkripsi()
    {
        return $this->hasMany(SuratKeluarSkPembimbingSkripsi::class, 'id_surat', 'id');
    }

    //relasi dengan tabel surat keluar sk kompre
    public function skKompre()
    {
        return $this->hasMany(SuratKeluarSkKompre::class, 'id_surat', 'id');
    }
    
}
