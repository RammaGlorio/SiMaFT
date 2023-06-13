<?php

namespace App\Http\Livewire\SuratMasukUmum\Pd1;

use Livewire\Component;
use App\Models\DisposisiDekan;
use App\Models\DisposisiPd1;
use App\Models\SuratMasukUmum;
use App\Models\LacakSurat;
use DB;

class Disposisi extends Component
{
    public $id_surat, $data_surat, $data_disposisi;

    public $catatan;

    public function mount($id)
    {
 
        $this->id_surat = $id;

        $this->data_surat = SuratMasukUmum::where('id', $id)->where('status', 'pd1')->first();
        $this->data_disposisi = DisposisiDekan::where('id_surat', $id)->where('type', 'surat_masuk')->first();

        if(!$this->data_surat) return abort(404);
    }

    public function kirim()
    {
        DB::beginTransaction();

        try {
            // cek jika telah melakukan disposisi, dan mencoba disposisi kembali menggunakan data surat yang sama
            if($this->data_surat->status !== 'pd1'){
                session()->flash('error', 'Tidak dapat diakses.');
                return redirect()->route('surat-masuk-umum-pd1.index');
            }

            $this->data_surat->update([
                'status' => 'kabag',
                'disposisi_pd' => 'pd1'
            ]);
            
            LacakSurat::create([
                'id_surat' => $this->data_surat->id,
                'type' => 'surat_masuk',
                'posisi' => 'kabag'
            ]);
    
            DisposisiPd1::create([
                'id_surat' => $this->id_surat,
                'catatan' => $this->catatan,
                'type' => 'surat_masuk'
            ]);
    
            DB::commit();

            //flash message
            session()->flash('message', 'Berhasil Disposisi.');
    
            //redirect
            return redirect()->route('surat-masuk-umum-pd1.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
    
            return redirect()->route('surat-masuk-umum-pd1.index');
        }

    }

    public function render()
    {
        return view('livewire.surat-masuk-umum.pd1.disposisi');
    }
}
