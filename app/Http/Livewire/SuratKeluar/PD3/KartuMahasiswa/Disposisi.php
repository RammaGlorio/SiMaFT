<?php

namespace App\Http\Livewire\SuratKeluar\PD3\KartuMahasiswa;

use Livewire\Component;
use App\Models\SuratKeluarKartuMahasiswa;
use App\Models\DisposisiKabag;
use App\Models\DisposisiPd3;
use App\Models\LacakSurat;
use DB;

class Disposisi extends Component
{
    public $id_surat, $log_surat_keluar, $data_surat, $data_disposisi;

    public $catatan, $tujuan;

    public function mount($id)
    {
        $this->id_surat = $id;

        $this->data_surat = SuratKeluarKartuMahasiswa::where('id', $id)->where('status', 'pd3')->first();

        $this->data_disposisi = DisposisiKabag::where('id_surat', $id)->where('type', 'surat_keluar')->first();

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
            if($this->data_surat->status !== 'pd3'){
                session()->flash('error', 'Tidak dapat diakses.');
                return redirect()->route('surat-keluar.pd3.kartu-mhs.index');
            }

            $msg = "";

            if($this->tujuan === 'dekan') // tujuan akan diteruskan kepada dekan
            {
                $this->data_surat->update([
                    'status' => 'dekan',
                ]);
    
                LacakSurat::create([
                    'id_surat' => $this->data_surat->id_surat,
                    'type' => 'surat_keluar',
                    'posisi' => 'dekan',
                ]);
    
                $msg = "Berhasil Disposisi";

            }elseif($this->tujuan === 'tanda_tangan') // akan langsung ditandatangani oleh pd3
            {
                $this->data_surat->update([
                    'status' => 'umum',
                    'tanda_tangan' => 'pd3'
                ]);
    
                LacakSurat::create([
                    'id_surat' => $this->data_surat->id_surat,
                    'type' => 'surat_keluar',
                    'posisi' => 'umum',
                ]);
    
                $msg = "Berhasil Tanda Tangan.";
            }
    
            DisposisiPd3::create([
                'id_surat' => $this->id_surat,
                'catatan' => $this->catatan,
                'type' => 'surat_keluar'
            ]);
    
            DB::commit();

            //flash message
            session()->flash('message', $msg);

            //redirect
            return redirect()->route('surat-keluar.pd3.kartu-mhs.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
    
            return redirect()->route('surat-keluar.pd3.kartu-mhs.index');
        }
    }

    public function render()
    {
        return view('livewire.surat-keluar.p-d3.kartu-mahasiswa.disposisi');
    }
}
