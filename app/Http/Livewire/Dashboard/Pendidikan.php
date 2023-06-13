<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\SuratMasukUmum;
use App\Models\SuratKeluarSkPembimbingSkripsi;
use App\Models\SuratKeluarSkProposal;
use App\Models\SuratKeluarSkUjianHasil;
use App\Models\SuratKeluarSkKompre;

class Pendidikan extends Component
{
    public function render()
    {

        $totalSuratMasukSkProposal = SuratMasukUmum::where('status', 'pendidikan')->where('jenis_surat', 'sk_proposal')->whereDoesntHave('skProposal')->count();
        $totalSuratMasukSkPembimbinSkripsi = SuratMasukUmum::where('status', 'pendidikan')->where('jenis_surat', 'sk_pembimbing_skripsi')->whereDoesntHave('skPembimbingSkripsi')->count();
        $totalSuratMasukSkUjianHasil = SuratMasukUmum::where('status', 'pendidikan')->where('jenis_surat', 'sk_ujian_hasil')->whereDoesntHave('skUjianHasil')->count();
        $totalSuratMasukSkKompre = SuratMasukUmum::where('status', 'pendidikan')->where('jenis_surat', 'sk_kompre')->whereDoesntHave('skKompre')->count();

        $totalSuratKeluarSkProposal = SuratKeluarSkProposal::where('status', 'pendidikan')->count();
        $totalSuratKeluarSkPembimbingSkripsi = SuratKeluarSkPembimbingSkripsi::where('status', 'pendidikan')->count();
        $totalSuratKeluarSkUjianHasil = SuratKeluarSkUjianHasil::where('status', 'pendidikan')->count();
        $totalSuratKeluarSkKompre = SuratKeluarSkKompre::where('status', 'pendidikan')->count();

        return view('livewire.dashboard.pendidikan', [
            'total_surat_masuk_sk_proposal' => $totalSuratMasukSkProposal,
            'total_surat_masuk_sk_pembimbing_skripsi' => $totalSuratMasukSkPembimbinSkripsi,
            'total_surat_masuk_sk_ujian_hasil' => $totalSuratMasukSkUjianHasil,
            'total_surat_masuk_sk_kompre' => $totalSuratMasukSkKompre,

            'total_surat_keluar_sk_proposal' => $totalSuratKeluarSkProposal,
            'total_surat_keluar_sk_pembimbing_skripsi' => $totalSuratKeluarSkPembimbingSkripsi,
            'total_surat_keluar_sk_ujian_hasil' => $totalSuratKeluarSkUjianHasil,
            'total_surat_keluar_sk_kompre' => $totalSuratKeluarSkKompre,
        ]);
    }
}
