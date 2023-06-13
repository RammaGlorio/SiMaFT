<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\SuratMasukUmum;
use App\Models\SuratKeluarKartuMahasiswa;

class Kemahasiswaan extends Component
{
    public function render()
    {
        $totalSuratMasukKartuMahasiswa = SuratMasukUmum::where('status', 'kemahasiswaan')->where('jenis_surat', 'ket_kartu_mhs')->whereDoesntHave('kartuMahasiswa')->count();

        $totalSuratKeluarKartuMahasiswa = SuratKeluarKartuMahasiswa::where('status', 'kemahasiswaan')->count();

        return view('livewire.dashboard.kemahasiswaan', [
            'total_surat_masuk_kartu_mahasiswa' => $totalSuratMasukKartuMahasiswa,

            'total_surat_keluar_kartu_mahasiswa' => $totalSuratKeluarKartuMahasiswa,
        ]);
    }
}
