<?php

namespace App\Http\Livewire\SuratKeluar\Pendidikan\SkPembimbingSkripsi;

use Livewire\Component;
use App\Models\SuratKeluarSkPembimbingSkripsi;
use DB;

class Edit extends Component
{
    public $suratId, $nama_mhs, $nim, $jurusan_prodi, $memperhatikan, $tanggal_surat, $judul_skripsi;
    public $nama_dosen, $daftar_dosen_pembimbing = [];

    public function mount($id)
    {
        $dataSurat = SuratKeluarSkPembimbingSkripsi::find($id);
        
        if($dataSurat) {
            $this->suratId  = $id;
            $this->nama_mhs = $dataSurat->nama_mhs;
            $this->nim = $dataSurat->nim;
            $this->jurusan_prodi  = $dataSurat->jurusan_prodi;
            $this->memperhatikan = $dataSurat->memperhatikan;
            $this->tanggal_surat = $dataSurat->tanggal_surat->format('Y-m-d');
            $this->judul_skripsi = $dataSurat->judul_skripsi;
            $this->daftar_dosen_pembimbing = json_decode($dataSurat->dosen_pembimbing);
        }else{
            return abort(404);
        }

    }

    public function tambahDosen(){
        $this->validate([
            'nama_dosen' => 'required'
        ]);

        array_push($this->daftar_dosen_pembimbing, $this->nama_dosen);

        $this->nama_dosen = "";
    }

    public function hapusDosen($key){
        unset($this->daftar_dosen_pembimbing[$key]);
    }

    public function update()
    {
        DB::beginTransaction();

        $this->validate(
            [
                'nama_mhs'              => 'required',
                'nim'                   => 'required',
                'jurusan_prodi'         => 'required',
                'memperhatikan'         => 'required',
                'tanggal_surat'         => 'required',
                'judul_skripsi'         => 'required',
                'daftar_dosen_pembimbing'  => 'required',
            ],
            [
                'nama_mhs.required'              => 'Tidak boleh kosong.',
                'nim.required'                   => 'Tidak boleh kosong.',
                'jurusan_prodi.required'         => 'Tidak boleh kosong.',
                'memperhatikan.required'         => 'Tidak boleh kosong.',
                'tanggal_surat.required'         => 'Tidak boleh kosong.',
                'judul_skripsi.required'         => 'Tidak boleh kosong.',
                'daftar_dosen_pembimbing.required'  => 'Tidak boleh kosong.',
            ]
        );

        try {
            if($this->suratId) {
    
                $dataSurat = SuratKeluarSkPembimbingSkripsi::find($this->suratId);
                
                if($dataSurat) {
                    $dataSurat->update([
                        'nama_mhs'              => $this->nama_mhs,
                        'nim'                   => $this->nim,
                        'jurusan_prodi'         => $this->jurusan_prodi,
                        'memperhatikan'         => $this->memperhatikan,
                        'tanggal_surat'         => $this->tanggal_surat,
                        'judul_skripsi'         => $this->judul_skripsi,
                        'dosen_pembimbing'         => json_encode($this->daftar_dosen_pembimbing),
                    ]);
                }
            }

            DB::commit();

            //flash message
            session()->flash('message', 'Berhasil Diubah.');
    
            return redirect()->route('surat-keluar.pendidikan.sk-pembimbing-skripsi.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
    
            return redirect()->route('surat-keluar.pendidikan.sk-pembimbing-skripsi.index');
        }

    }

    public function render()
    {
        return view('livewire.surat-keluar.pendidikan.sk-pembimbing-skripsi.edit');
    }
}
