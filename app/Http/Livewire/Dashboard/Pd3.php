<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\SuratMasukUmum;
use App\Models\SuratKeluarKartuMahasiswa;
use DB;

class Pd3 extends Component
{
    public function render()
    {
        $totalSuratMasuk = DB::table('surat_masuk_umums')
                                ->where('status', 'pd3')
                                ->whereIn('jenis_surat', ['ket_kartu_mhs'])
                                ->select('jenis_surat', DB::raw('count(*) as total'))
                                ->groupBy('jenis_surat')
                                ->get();

                                $totalSuratKeluarKartuMahasiswa = SuratKeluarKartuMahasiswa::where('status', 'pd3')->count();

        // dd($totalSuratMasuk);
        return view('livewire.dashboard.pd3', [
            'total_surat_masuk' => $totalSuratMasuk,

            'total_surat_keluar_kartu_mahasiswa' => $totalSuratKeluarKartuMahasiswa,
        ]);
    }
}
