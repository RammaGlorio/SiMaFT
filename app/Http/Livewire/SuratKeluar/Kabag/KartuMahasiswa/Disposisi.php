<?php

namespace App\Http\Livewire\SuratKeluar\Kabag\KartuMahasiswa;

use Livewire\Component;
use App\Models\SuratKeluarKartuMahasiswa;
use App\Models\DisposisiKabag;
use App\Models\LacakSurat;
use DB;

class Disposisi extends Component
{
    public $id_surat, $log_surat_keluar, $data_surat;

    public $catatan, $tujuan;

    public function mount($id)
    {
        $this->id_surat = $id;
        
        $this->data_surat = SuratKeluarKartuMahasiswa::where('id', $id)->where('status', 'kabag')->first();
        
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
            if($this->data_surat->status !== 'kabag'){
                session()->flash('error', 'Tidak dapat diakses.');
                return redirect()->route('surat-keluar.kabag.kartu-mhs.index');
            }
            
            $this->data_surat->update([
                'status' => $this->tujuan,
            ]);
    
            LacakSurat::create([
                'id_surat' => $this->data_surat->id_surat,
                'type' => 'surat_keluar',
                'posisi' => $this->tujuan,
            ]);
    
            DisposisiKabag::create([
                'id_surat' => $this->id_surat,
                'catatan' => $this->catatan,
                'type' => 'surat_keluar'
            ]);
    
            DB::commit();
            
            //flash message
            session()->flash('message', 'Berhasil Disposisi.');
    
            //redirect
            return redirect()->route('surat-keluar.kabag.kartu-mhs.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
    
            return redirect()->route('surat-keluar.kabag.kartu-mhs.index');
        }
    }

    public function render()
    {
        return view('livewire.surat-keluar.kabag.kartu-mahasiswa.disposisi');
    }
}
