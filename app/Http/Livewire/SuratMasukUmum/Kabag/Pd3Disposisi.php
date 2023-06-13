<?php

namespace App\Http\Livewire\SuratMasukUmum\Kabag;

use Livewire\Component;
use App\Models\DisposisiDekan;
use App\Models\DisposisiPd3;
use App\Models\DisposisiKabag;
use App\Models\SuratMasukUmum;
use App\Models\LacakSurat;
use DB;

class Pd3Disposisi extends Component
{
    public $id_surat, $data_surat, $disposisi_dekan, $disposisi_pd3;

    public $catatan;

    public $tujuan;

    public function mount($id)
    {
 
        $this->id_surat = $id;

        $this->data_surat = SuratMasukUmum::where('id', $id)->where('status', 'kabag')->first();
        $this->disposisi_dekan = DisposisiDekan::where('id_surat', $id)->where('type','surat_masuk')->first();
        $this->disposisi_pd3 = DisposisiPd3::where('id_surat', $id)->where('type','surat_masuk')->first();

        if(!$this->data_surat) return abort(404);
    }

    public function kirim()
    {
        DB::beginTransaction();

        $this->validate([
            'tujuan'   => 'required'
        ]);
        
        try {
            // cek jika telah melakukan disposisi, dan mencoba disposisi kembali menggunakan data surat yang sama
            if($this->data_surat->status !== 'kabag'){
                session()->flash('error', 'Tidak dapat diakses.');
                return redirect()->route('surat-masuk-umum-kabag-pd3.index');
            }
            
            $this->data_surat->update([
                'status' => $this->tujuan,
            ]);
    
            LacakSurat::create([
                'id_surat' => $this->data_surat->id,
                'type' => 'surat_masuk',
                'posisi' => $this->tujuan,
            ]);
    
            DisposisiKabag::create([
                'id_surat' => $this->id_surat,
                'catatan' => $this->catatan,
                'type' => 'surat_masuk'
            ]);
    
            DB::commit();

            //flash message
            session()->flash('message', 'Berhasil Disposisi.');
    
            //redirect
            return redirect()->route('surat-masuk-umum-kabag-pd3.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
    
            return redirect()->route('surat-masuk-umum-kabag-pd3.index');
        }

    }

    public function render()
    {
        return view('livewire.surat-masuk-umum.kabag.pd3-disposisi');
    }
}
