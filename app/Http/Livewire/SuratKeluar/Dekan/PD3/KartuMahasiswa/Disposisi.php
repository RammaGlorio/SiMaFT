<?php

namespace App\Http\Livewire\SuratKeluar\Dekan\PD3\KartuMahasiswa;

use Livewire\Component;
use App\Models\SuratKeluarKartuMahasiswa;
use App\Models\DisposisiDekan;
use App\Models\DisposisiPd3;
use App\Models\DisposisiKabag;
use App\Models\LacakSurat;
use DB;

class Disposisi extends Component
{
    public $id_surat, $log_surat_keluar, $data_surat;
    public $disposisi_kabag, $disposisi_pd3;
    public $tujuan;

    public function mount($id)
    {
        $this->id_surat = $id;

        $this->data_surat = SuratKeluarKartuMahasiswa::where('id', $id)->where('status', 'dekan')->first();

        $this->disposisi_kabag = DisposisiKabag::where('id_surat', $id)->first();
        $this->disposisi_pd3 = DisposisiPd3::where('id_surat', $id)->first();

        if(!$this->data_surat) return abort(404);
    }

    public function kirim()
    {
        DB::beginTransaction();

        $this->validate([
            'tujuan'  => 'required'
        ]);
        
        try {
            // cek jika telah melakukan disposisi, dan mencoba disposisi kembali menggunakan data surat yang sama
            if($this->data_surat->status !== 'dekan'){
                session()->flash('error', 'Tidak dapat diakses.');
                return redirect()->route('surat-keluar.pd3.dekan.kartu-mhs.index');
            }

            if($this->tujuan === 'tanda_tangan')
            {
                $this->data_surat->update([
                    'status' => 'umum',
                    'tanda_tangan' => 'dekan'
                ]);
    
                LacakSurat::create([
                    'id_surat' => $this->data_surat->id_surat,
                    'type' => 'surat_keluar',
                    'posisi' => 'umum',
                ]);
    
                DisposisiDekan::create([
                    'id_surat' => $this->id_surat,
                    'type' => 'surat_keluar'
                ]);
    
            }
            
            DB::commit();

            //flash message
            session()->flash('message', 'Berhasil Disposisi.');

            //redirect
            return redirect()->route('surat-keluar.pd3.dekan.kartu-mhs.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
    
            return redirect()->route('surat-keluar.pd3.dekan.kartu-mhs.index');
        }
    }

    public function render()
    {
        return view('livewire.surat-keluar.dekan.p-d3.kartu-mahasiswa.disposisi');
    }
}
