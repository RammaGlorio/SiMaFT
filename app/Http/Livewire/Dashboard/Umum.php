<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\SuratMasukUmum;
use App\Models\SuratKeluarKartuMahasiswa;
use App\Models\SuratKeluarSkPembimbingSkripsi;
use App\Models\SuratKeluarSkProposal;
use App\Models\SuratKeluarSkUjianHasil;
use App\Models\SuratKeluarSkKompre;
use DB;

class Umum extends Component
{
    public function render()
    {
        $totalSuratMasuk = SuratMasukUmum::count();

        $totalSuratKeluarKartuMahasiswa = SuratKeluarKartuMahasiswa::count();
        $totalSuratKeluarSkPembimbingSkripsi = SuratKeluarSkPembimbingSkripsi::count();
        $totalSuratKeluarSkProposal = SuratKeluarSkProposal::count();
        $totalSuratKeluarSkUjianHasil = SuratKeluarSkUjianHasil::count();
        $totalSuratKeluarSkKompre = SuratKeluarSkKompre::count();

        $totalArsipSuratKeluarKartuMahasiswa = SuratKeluarKartuMahasiswa::whereNotNull('nomor_surat')->whereNotNull('status_selesai')->count();
        $totalArsipSuratKeluarSkPembimbingSkripsi = SuratKeluarSkPembimbingSkripsi::whereNotNull('nomor_surat')->whereNotNull('status_selesai')->count();
        $totalArsipSuratKeluarSkProposal = SuratKeluarSkProposal::whereNotNull('nomor_surat')->whereNotNull('status_selesai')->count();
        $totalArsipSuratKeluarSkUjianHasil = SuratKeluarSkUjianHasil::whereNotNull('nomor_surat')->whereNotNull('status_selesai')->count();
        $totalArsipSuratKeluarSkKompre = SuratKeluarSkKompre::whereNotNull('nomor_surat')->whereNotNull('status_selesai')->count();

        return view('livewire.dashboard.umum', [
            'total_surat_masuk' => $totalSuratMasuk,
            'total_surat_keluar' => $totalSuratKeluarKartuMahasiswa+$totalSuratKeluarSkPembimbingSkripsi+$totalSuratKeluarSkProposal+$totalSuratKeluarSkUjianHasil,

            'total_arsip_surat_keluar_kartu_mahasiswa' => $totalArsipSuratKeluarKartuMahasiswa,
            'total_arsip_surat_keluar_sk_pembimbing_skripsi' => $totalArsipSuratKeluarSkPembimbingSkripsi,
            'total_arsip_surat_keluar_sk_proposal' => $totalArsipSuratKeluarSkProposal,
            'total_arsip_surat_keluar_sk_ujian_hasil' => $totalArsipSuratKeluarSkUjianHasil,
            'total_arsip_surat_keluar_sk_kompre' => $totalArsipSuratKeluarSkKompre,
        ]);
    }
}
