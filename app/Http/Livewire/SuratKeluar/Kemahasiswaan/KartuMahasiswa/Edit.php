<?php

namespace App\Http\Livewire\SuratKeluar\Kemahasiswaan\KartuMahasiswa;

use Livewire\Component;
use App\Models\SuratKeluarKartuMahasiswa;
use DB;

class Edit extends Component
{
    public $suratId;
    public $nama_mhs;
    public $nim;
    public $jurusan_prodi;

    public function mount($id)
    {
        $dataSurat = SuratKeluarKartuMahasiswa::find($id);
        
        if($dataSurat) {
            $this->suratId  = $id;
            $this->nama_mhs = $dataSurat->nama_mhs;
            $this->nim = $dataSurat->nim;
            $this->jurusan_prodi  = $dataSurat->jurusan_prodi;
        }else{
            if(!$dataSurat) return abort(404);
        }
    }

    public function update()
    {
        DB::beginTransaction();

        $this->validate(
            [
                'nama_mhs'  => 'required',
                'nim'  => 'required',
                'jurusan_prodi'   => 'required'
            ],
            [
                'nama_mhs.required'              => 'Tidak boleh kosong.',
                'nim.required'                   => 'Tidak boleh kosong.',
                'jurusan_prodi.required'         => 'Tidak boleh kosong.',
            ]
        );

        try {
            if($this->suratId) {
    
                $dataSurat = SuratKeluarKartuMahasiswa::find($this->suratId);
                
                if($dataSurat) {
                    $dataSurat->update([
                        'nama_mhs'  => $this->nama_mhs,
                        'nim'  => $this->nim,
                        'jurusan_prodi'   => $this->jurusan_prodi
                    ]);
                }
            }

            DB::commit();

            //flash message
            session()->flash('message', 'Berhasil Diubah.');
    
            return redirect()->route('surat-keluar.kemahasiswaan.kartu-mahasiswa.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
    
            return redirect()->route('surat-keluar.kemahasiswaan.kartu-mahasiswa.index');
        }

    }

    public function render()
    {
        return view('livewire.surat-keluar.kemahasiswaan.kartu-mahasiswa.edit');
    }
}
