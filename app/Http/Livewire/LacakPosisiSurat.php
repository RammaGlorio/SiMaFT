<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SuratMasukUmum;
use App\Models\LacakSurat;

class LacakPosisiSurat extends Component
{
    public $no_surat, $suratMasukUmum, $lacakSuratMasuk, $lacakSuratKeluar;

    public function lacakSurat(){
        $this->validate([
            'no_surat'   => 'required',
        ]);

        $this->suratMasukUmum = SuratMasukUmum::where('no_surat_masuk', $this->no_surat)->first();

        if($this->suratMasukUmum){
            $this->lacakSuratMasuk = LacakSurat::where('id_surat', $this->suratMasukUmum->id)
                                                ->where('type', 'surat_masuk')
                                                ->orderBy('created_at', 'asc')->get();
            $this->lacakSuratKeluar = LacakSurat::where('id_surat', $this->suratMasukUmum->id)
                                                ->where('type', 'surat_keluar')
                                                ->orderBy('created_at', 'asc')->get();
        }else{
            //flash message
            session()->flash('message', 'Tidak ditemukan.');

            //redirect
            return redirect()->route('lacak.surat');
        }
    }
    public function render()
    {
        return view('livewire.lacak-posisi-surat')->layout('layouts.lacak-surat');
    }
}
