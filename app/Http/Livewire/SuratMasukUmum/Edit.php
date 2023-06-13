<?php

namespace App\Http\Livewire\SuratMasukUmum;

use App\Models\SuratMasukUmum;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use DB;

class Edit extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $suratmasukumumId;
    public $no_surat_masuk;
    public $tanggal_terima;
    public $tanggal_surat;
    public $pengirim;
    public $perihal_surat;
    public $sifat_surat;
    public $scan_file_surat;
    public $del_scan_file_surat; // simpan data surat yg sudah ada, untuk nanti dihapus

    public function mount($id)
    {
        $suratmasukumum = SuratMasukUmum::find($id);
        
        if($suratmasukumum) {
            $this->suratmasukumumId  = $id;
            $this->no_surat_masuk = $suratmasukumum->no_surat_masuk;
            $this->tanggal_terima = $suratmasukumum->tanggal_terima->format('Y-m-d');
            $this->tanggal_surat  = $suratmasukumum->tanggal_surat->format('Y-m-d');
            $this->pengirim       = $suratmasukumum->pengirim;
            $this->perihal_surat  = $suratmasukumum->perihal_surat;
            $this->sifat_surat    = $suratmasukumum->sifat_surat;
            $this->del_scan_file_surat= $suratmasukumum->scan_file_surat;
        }else{
            return abort(404);
        }
    }
    
    public function update()
    {
        DB::beginTransaction();

        $this->validate([
            'no_surat_masuk'  => 'required',
            'tanggal_terima'  => 'required',
            'tanggal_surat'   => 'required',
            'pengirim'        => 'required',
            'perihal_surat'   => 'required',
        ]);

        try {
    
            if($this->suratmasukumumId) {
    
                $suratmasukumum = SuratMasukUmum::find($this->suratmasukumumId);
                
                if($suratmasukumum) {
                    $suratmasukumum->update([
                    'no_surat_masuk'  => $this->no_surat_masuk,
                    'tanggal_terima'  => $this->tanggal_terima,
                    'tanggal_surat'   => $this->tanggal_surat,
                    'pengirim'        => $this->pengirim,
                    'perihal_surat'   => $this->perihal_surat,
                    'sifat_surat'     => $this->sifat_surat,
                    ]);
                }
    
                // jika file surat tersedia, akan diupdate
                if($this->scan_file_surat)
                {
                    //menghapus file surat lama    
                    Storage::delete($this->del_scan_file_surat);
        
                    //menyimpan file surat
                    $nama_file = uniqid() . '.' . $this->scan_file_surat->getClientOriginalExtension();
                    $path = $this->scan_file_surat->storeAs('surat-masuk', $nama_file);
                
                    $suratmasukumum->update([
                        'scan_file_surat' => $path
                    ]);
                }
            }

            DB::commit();

            //flash message
            session()->flash('message', 'Berhasil Diubah.');
    
            return redirect()->route('surat-masuk-umum.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
    
            return redirect()->route('surat-masuk-umum.index');

        }
    }

    public function render()
    {
        return view('livewire.surat-masuk-umum.edit');
    }
}
