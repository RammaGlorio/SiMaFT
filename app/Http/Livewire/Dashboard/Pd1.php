<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\SuratMasukUmum;
use App\Models\SuratKeluarSkPembimbingSkripsi;
use App\Models\SuratKeluarSkProposal;
use App\Models\SuratKeluarSkUjianHasil;
use App\Models\SuratKeluarSkKompre;
use DB;

class Pd1 extends Component
{
    public function render()
    {
        $totalSuratMasuk = DB::table('surat_masuk_umums')
                                ->where('status', 'pd1')
                                ->whereIn('jenis_surat', ['sk_proposal', 'sk_ujian_hasil', 'sk_pembimbing_skripsi','sk_kompre'])
                                ->select('jenis_surat', DB::raw('count(*) as total'))
                                ->groupBy('jenis_surat')
                                ->get();

        $totalSuratKeluarSkPembimbingSkripsi = SuratKeluarSkPembimbingSkripsi::where('status', 'pd1')->count();
        $totalSuratKeluarSkProposal = SuratKeluarSkProposal::where('status', 'pd1')->count();
        $totalSuratKeluarSkUjianHasil = SuratKeluarSkUjianHasil::where('status', 'pd1')->count();
        $totalSuratKeluarSkKompre = SuratKeluarSkKompre::where('status', 'pd1')->count();

        // dd($totalSuratMasuk);
        return view('livewire.dashboard.pd1', [
            'total_surat_masuk' => $totalSuratMasuk,

            'total_surat_keluar_sk_pembimbing_skripsi' => $totalSuratKeluarSkPembimbingSkripsi,
            'total_surat_keluar_sk_proposal' => $totalSuratKeluarSkProposal,
            'total_surat_keluar_sk_ujian_hasil' => $totalSuratKeluarSkUjianHasil,
            'total_surat_keluar_sk_kompre' => $totalSuratKeluarSkKompre,
        ]);

    }
}
