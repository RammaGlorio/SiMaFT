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

class Dekan extends Component
{
    public function render()
    {
        $totalSuratMasuk = DB::table('surat_masuk_umums')
                                ->where('status', 'dekan')
                                ->select('jenis_surat', DB::raw('count(*) as total'))
                                ->groupBy('jenis_surat')
                                ->get();

        $totalSuratKeluarKartuMahasiswa = SuratKeluarKartuMahasiswa::where('status', 'dekan')->count();
        $totalSuratKeluarSkPembimbingSkripsi = SuratKeluarSkPembimbingSkripsi::where('status', 'dekan')->count();
        $totalSuratKeluarSkProposal = SuratKeluarSkProposal::where('status', 'dekan')->count();
        $totalSuratKeluarSkUjianHasil = SuratKeluarSkUjianHasil::where('status', 'dekan')->count();
        $totalSuratKeluarSkKompre = SuratKeluarSkKompre::where('status', 'dekan')->count();

        // dd($totalSuratMasuk);
        return view('livewire.dashboard.dekan', [
            'total_surat_masuk' => $totalSuratMasuk,

            'total_surat_keluar_kartu_mahasiswa' => $totalSuratKeluarKartuMahasiswa,
            'total_surat_keluar_sk_pembimbing_skripsi' => $totalSuratKeluarSkPembimbingSkripsi,
            'total_surat_keluar_sk_proposal' => $totalSuratKeluarSkProposal,
            'total_surat_keluar_sk_ujian_hasil' => $totalSuratKeluarSkUjianHasil,
            'total_surat_keluar_sk_kompre' => $totalSuratKeluarSkKompre,
        ]);
    }
}
