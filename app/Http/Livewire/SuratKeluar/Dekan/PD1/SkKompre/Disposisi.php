<?php

namespace App\Http\Livewire\SuratKeluar\Dekan\PD1\SkKompre;

use Livewire\Component;
use App\Models\SuratKeluarSkKompre;
use App\Models\DisposisiDekan;
use App\Models\DisposisiPd1;
use App\Models\DisposisiKabag;
use App\Models\LacakSurat;
use DB;

class Disposisi extends Component
{
    public $id_surat, $log_surat_keluar, $data_surat;
    public $disposisi_kabag, $disposisi_pd1;
    public $tujuan;

    public function mount($id)
    {
        $this->id_surat = $id;

        $this->data_surat = SuratKeluarSkKompre::where('id', $id)->where('status', 'dekan')->first();

        $this->disposisi_kabag = DisposisiKabag::where('id_surat', $id)->first();
        $this->disposisi_pd1 = DisposisiPd1::where('id_surat', $id)->first();

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
                return redirect()->route('surat-keluar.pd1.dekan.sk-komprehensif.index');
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
            return redirect()->route('surat-keluar.pd1.dekan.sk-komprehensif.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
    
            return redirect()->route('surat-keluar.pd1.dekan.sk-komprehensif.index');
        }
    }

    public function render()
    {
        return view('livewire.surat-keluar.dekan.p-d1.sk-kompre.disposisi');
    }
}
