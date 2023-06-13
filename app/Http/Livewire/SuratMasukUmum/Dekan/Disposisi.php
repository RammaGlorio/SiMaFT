<?php

namespace App\Http\Livewire\SuratMasukUmum\Dekan;

use Livewire\Component;
use App\Models\DisposisiDekan;
use App\Models\SuratMasukUmum;
use App\Models\LacakSurat;
use DB;

class Disposisi extends Component
{

    public $id_surat, $data_surat;

    public $catatan, $tujuan;

    public function mount($id)
    {
        $this->id_surat = $id;

        $this->data_surat = SuratMasukUmum::where('id', $id)->where('status', 'dekan')->first();

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
            if($this->data_surat->status !== 'dekan'){
                session()->flash('error', 'Tidak dapat diakses.');
                return redirect()->route('surat-masuk-umum-dekan.index');
            }

            $this->data_surat->update([
                'status' => $this->tujuan,
            ]);
    
            LacakSurat::create([
                'id_surat' => $this->data_surat->id,
                'type' => 'surat_masuk',
                'posisi' => $this->tujuan
            ]);
    
            DisposisiDekan::create([
                'id_surat' => $this->id_surat,
                'catatan' => $this->catatan,
                'type' => 'surat_masuk'
            ]);
    
            DB::commit();

            //flash message
            session()->flash('message', 'Berhasil Disposisi.');
    
            //redirect
            return redirect()->route('surat-masuk-umum-dekan.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
    
            return redirect()->route('surat-masuk-umum-dekan.index');
        }

    }

    public function render()
    {
        return view('livewire.surat-masuk-umum.dekan.disposisi');
    }
}
