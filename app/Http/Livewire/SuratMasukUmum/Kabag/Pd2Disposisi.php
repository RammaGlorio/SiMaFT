<?php

namespace App\Http\Livewire\SuratMasukUmum\Kabag;

use Livewire\Component;
use App\Models\DisposisiDekan;
use App\Models\DisposisiPd2;
use App\Models\DisposisiKabag;
use App\Models\SuratMasukUmum;

class Pd2Disposisi extends Component
{
    // public $id_surat, $data_surat, $disposisi_dekan, $disposisi_pd2;

    // public $catatan;

    // public $pendidikan, $kemahasiswaan, $umum;

    // public function mount($id)
    // {
 
    //     $this->id_surat = $id;

    //     $this->data_surat = SuratMasukUmum::find($id);
    //     $this->disposisi_dekan = DisposisiDekan::where('id_surat', $id)->first();
    //     $this->disposisi_pd2 = DisposisiPd2::where('id_surat', $id)->first();

    //     if(!$this->data_surat) return abort(404);
    // }

    // public function kirim()
    // {

    //     if($this->pendidikan)
    //     {
    //         $status = 'pendidikan';
    //     }elseif($this->kemahasiswaan)
    //     {
    //         $status = 'kemahasiswaan';
    //     }elseif($this->umum)
    //     {
    //         $status = 'sub-umum';
    //     }

    //     $this->data_surat->update([
    //         'status' => $status,
    //         'disposisi_3' => 'kabag'
    //     ]);

    //     DisposisiKabag::create([
    //         'id_surat' => $this->id_surat,
    //         'catatan' => $this->catatan,
    //         'type' => 'surat_masuk'
    //     ]);

    //     //flash message
    //     session()->flash('message', 'Berhasil Disposisi.');

    //     //redirect
    //     return redirect()->route('surat-masuk-umum-kabag-pd2.index');
    // }

    public function render()
    {
        return view('livewire.surat-masuk-umum.kabag.pd2-disposisi');
    }
}
