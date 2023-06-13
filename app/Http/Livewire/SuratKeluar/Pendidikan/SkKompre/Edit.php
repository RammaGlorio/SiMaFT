<?php

namespace App\Http\Livewire\SuratKeluar\Pendidikan\SkKompre;

use Livewire\Component;
use App\Models\SuratKeluarSkKompre;
use DB;

class Edit extends Component
{
    public $suratId, $nama_mhs, $nim, $jurusan_prodi, $memperhatikan, $tanggal_surat, $tanggal_ujian, $waktu_ujian, $tempat_ujian, $sekertaris, $wakil_sekertaris, $judul_skripsi;
    public $nama_dosen, $daftar_dosen_penguji = [];

    public function mount($id)
    {
        $dataSurat = SuratKeluarSkKompre::find($id);
        
        if($dataSurat) {
            $this->suratId  = $id;
            $this->nama_mhs = $dataSurat->nama_mhs;
            $this->nim = $dataSurat->nim;
            $this->jurusan_prodi  = $dataSurat->jurusan_prodi;
            $this->memperhatikan = $dataSurat->memperhatikan;
            $this->tanggal_surat = $dataSurat->tanggal_surat->format('Y-m-d');
            $this->tanggal_ujian = $dataSurat->tanggal_ujian->format('Y-m-d');
            $this->waktu_ujian = $dataSurat->waktu_ujian;
            $this->tempat_ujian = $dataSurat->tempat_ujian;
            $this->sekertaris = $dataSurat->sekertaris;
            $this->wakil_sekertaris = $dataSurat->wakil_sekertaris;
            $this->judul_skripsi = $dataSurat->judul_skripsi;
            $this->daftar_dosen_penguji = json_decode($dataSurat->dosen_penguji);
        }else{
            return abort(404);
        }

    }

    public function tambahDosen(){
        $this->validate([
            'nama_dosen' => 'required'
        ]);

        array_push($this->daftar_dosen_penguji, $this->nama_dosen);

        $this->nama_dosen = "";
    }

    public function hapusDosen($key){
        unset($this->daftar_dosen_penguji[$key]);
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
                'tanggal_ujian'         => 'required',
                'waktu_ujian'         => 'required',
                'tempat_ujian'         => 'required',
                'sekertaris'            => 'required',
                'wakil_sekertaris'      => 'required',
                'judul_skripsi'         => 'required',
                'daftar_dosen_penguji'  => 'required',
            ],
            [
                'nama_mhs.required'              => 'Tidak boleh kosong.',
                'nim.required'                   => 'Tidak boleh kosong.',
                'jurusan_prodi.required'         => 'Tidak boleh kosong.',
                'memperhatikan.required'         => 'Tidak boleh kosong.',
                'tanggal_surat.required'         => 'Tidak boleh kosong.',
                'tanggal_ujian.required'         => 'Tidak boleh kosong.',
                'waktu_ujian.required'           => 'Tidak boleh kosong.',
                'tempat_ujian.required'          => 'Tidak boleh kosong.',
                'sekertaris.required'            => 'Tidak boleh kosong.',
                'wakil_sekertaris.required'      => 'Tidak boleh kosong.',
                'judul_skripsi.required'         => 'Tidak boleh kosong.',
                'daftar_dosen_penguji.required'  => 'Tidak boleh kosong.',
            ]
        );

        try {
            if($this->suratId) {
    
                $dataSurat = SuratKeluarSkKompre::find($this->suratId);
                
                if($dataSurat) {
                    $dataSurat->update([
                        'nama_mhs'              => $this->nama_mhs,
                        'nim'                   => $this->nim,
                        'jurusan_prodi'         => $this->jurusan_prodi,
                        'memperhatikan'         => $this->memperhatikan,
                        'tanggal_surat'         => $this->tanggal_surat,
                        'tanggal_ujian'         => $this->tanggal_ujian,
                        'waktu_ujian'           => $this->waktu_ujian,
                        'tempat_ujian'          => $this->tempat_ujian,
                        'sekertaris'            => $this->sekertaris,
                        'wakil_sekertaris'      => $this->wakil_sekertaris,
                        'judul_skripsi'         => $this->judul_skripsi,
                        'dosen_penguji'         => json_encode($this->daftar_dosen_penguji),
                    ]);
                }
            }

            DB::commit();

            //flash message
            session()->flash('message', 'Berhasil Diubah.');
    
            return redirect()->route('surat-keluar.pendidikan.sk-komprehensif.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
    
            return redirect()->route('surat-keluar.pendidikan.sk-komprehensif.index');
        }

    }

    public function render()
    {
        return view('livewire.surat-keluar.pendidikan.sk-kompre.edit');
    }
}
