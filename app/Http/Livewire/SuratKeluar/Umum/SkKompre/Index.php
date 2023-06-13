<?php

namespace App\Http\Livewire\SuratKeluar\Umum\SkKompre;

use Livewire\Component;
use App\Models\SuratKeluarSkKompre;
use Livewire\WithPagination;
use DB;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $searchText, $search; 

    public $selectedId, $data_surat, $no_surat;

    public function updated(){
        if($this->searchText === '' || $this->searchText === null) $this->search = null;
        $this->resetPage();
    }

    public function submitSearch(){
        if($this->searchText !== '' || $this->searchText !== null) $this->search = $this->searchText;
        $this->resetPage();
    }

    public function nomorSuratSelectedItem($id)
    {
        try {
            $this->data_surat = SuratKeluarSkKompre::find($id);
            $this->no_surat = $this->data_surat->nomor_surat;

            $this->dispatchBrowserEvent('openModalNomorSurat');
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
        }
    }

    public function suratDiterimaSelectedItem($id)
    {
        try {
            $this->data_surat = SuratKeluarSkKompre::find($id);

            $this->dispatchBrowserEvent('openModalSuratDiterima');
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
        }
    }

    public function konfirmasi_surat_diterima()
    {
        DB::beginTransaction();

        try {    
            $this->data_surat->update([
                'status_selesai' => 'selesai',
            ]);
            
            DB::commit();

            //flash message
            session()->flash('message', 'Berhasil Disimpan.');
            
            $this->dispatchBrowserEvent('closeModalNomorSurat');
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', $th->getMessage());

            $this->dispatchBrowserEvent('closeModalNomorSurat');
        }
    }

    public function simpan_no_surat()
    {
        DB::beginTransaction();

        $this->validate(
            [
                'no_surat' => 'required|unique:surat_keluar_sk_kompres,nomor_surat,'.$this->data_surat->id,
            ],
            [
                'no_surat.required' => 'Tidak boleh kosong',
                'no_surat.unique' => 'Nomor surat telah digunakan'
            ]
        );

        $this->validate([
            'no_surat'   => 'required',
        ]);

        try {
            
            $this->data_surat->update([
                'nomor_surat' => $this->no_surat,
            ]);
            
            DB::commit();

            //flash message
            session()->flash('message', 'Nomor Surat Berhasil Disimpan.');
            
            $this->dispatchBrowserEvent('closeModalNomorSurat');
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', $th->getMessage());

            $this->dispatchBrowserEvent('closeModalNomorSurat');
        }
    }

    public function render()
    {
        $daftar_surat = SuratKeluarSkKompre::where('status', 'umum')
                                                ->where('status_selesai', null)
                                                ->where(function($q){
                                                    $q->where('nama_mhs', 'like','%'.$this->search.'%')
                                                        ->orWhere('nim', 'like','%'.$this->search.'%')
                                                        ->orWhere('jurusan_prodi', 'like','%'.$this->search.'%');
                                                })
                                                ->latest()
                                                ->paginate(10);

        return view('livewire.surat-keluar.umum.sk-kompre.index', [
            'daftar_surat' => $daftar_surat
        ]);
    }
}
