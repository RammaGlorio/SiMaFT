<?php

namespace App\Http\Livewire\SuratMasukUmum;

use App\Models\SuratMasukUmum;
use App\Models\LacakSurat;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use DB;

class Index extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';
    public $searchText, $search; 

    public $no_surat_masuk;
    public $tanggal_terima;
    public $tanggal_surat;
    public $pengirim;
    public $perihal_surat;
    public $jenis_surat;
    public $sifat_surat;
    public $scan_file_surat;

    public $selectedId; // menyimpan id untuk surat yg dipilih untuk diproses

    public function updated(){
        if($this->searchText === '' || $this->searchText === null) $this->search = null;
        $this->resetPage();
    }

    public function submitSearch(){
        if($this->searchText !== '' || $this->searchText !== null) $this->search = $this->searchText;
        $this->resetPage();
    }

    public function simpanKirimSelectedItem($id)
    {
        $this->selectedId = $id;

        $this->dispatchBrowserEvent('openModalConfirmationSimpanKirim');
    }

    public function deleteSelectedItem($id)
    {
        $this->selectedId = $id;

        $this->dispatchBrowserEvent('openModalConfirmationDelete');
    }

    public function openModalConfirmation()
    {
        $this->dispatchBrowserEvent('openModalConfirmation');
    }

    public function simpan_kirim($id)
    {
        DB::beginTransaction();

        $this->dispatchBrowserEvent('closeModalConfirmationSimpanKirim');

        try {
            $data_surat = SuratMasukUmum::where('id', $id)->where('status', 'umum')->first();
    
            $data_surat->update([
                'status' => 'dekan'
            ]);
    
            LacakSurat::create([
                'id_surat' => $data_surat->id,
                'type' => 'surat_masuk',
                'posisi' => 'dekan'
            ]);
    
            DB::commit();

            //flash message
            session()->flash('message', 'Berhasil Diteruskan.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
        }
    }

    public function store()
    {
        DB::beginTransaction();

        $this->dispatchBrowserEvent('closeModalConfirmation');

        $this->validate([
            'no_surat_masuk'   => 'required',
            'tanggal_terima'   => 'required',
            'tanggal_surat'    => 'required',
            'pengirim'         => 'required',
            'perihal_surat'    => 'required',
            'jenis_surat'      => 'required',
            'sifat_surat'      => 'required',
            'scan_file_surat'  => 'required|mimes:pdf|max:500',
        ]);

        try {
    
            $suratMasuk = SuratMasukUmum::create([
                'no_surat_masuk'  => $this->no_surat_masuk,
                'tanggal_terima'  => $this->tanggal_terima,
                'tanggal_surat'   => $this->tanggal_surat,
                'pengirim'        => $this->pengirim,
                'perihal_surat'   => $this->perihal_surat,
                'jenis_surat'     => $this->jenis_surat,
                'sifat_surat'     => $this->sifat_surat,
                'scan_file_surat' => '.',
                'status' => 'umum'
            ]);
    
            if($suratMasuk)
            {
                LacakSurat::create([
                    'id_surat' => $suratMasuk->id,
                    'type' => 'surat_masuk',
                    'posisi' => 'umum'
                ]);
    
                $nama_file = uniqid() . '.' . $this->scan_file_surat->getClientOriginalExtension();
                $path = $this->scan_file_surat->storeAs('surat-masuk', $nama_file);
    
                $suratMasuk->update([
                    'scan_file_surat' => $path
                ]);
    
            }
    
            DB::commit();
            
            //flash message
            session()->flash('message', 'Berhasil Diproses.');

            //redirect
            return redirect()->route('surat-masuk-umum.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        $this->dispatchBrowserEvent('closeModalConfirmationDelete');

        try {
            $suratmasukumum = SuratMasukUmum::find($id);
    
            if($suratmasukumum) {
    
                //menghapus file surat lama    
                Storage::delete($suratmasukumum->scan_file_surat);
    
                LacakSurat::where('id_surat', $suratmasukumum->id)->delete();
    
                $suratmasukumum->delete();
            }

            DB::commit();
    
            //flash message
            session()->flash('message', 'Berhasil Dihapus.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
        }

    }
    
    public function render()
    {
        $daftar_surat = SuratMasukUmum::where('status', 'umum')
                                            ->where(function($q){
                                                $q->where('no_surat_masuk', 'like','%'.$this->search.'%')
                                                    ->orWhere('pengirim', 'like','%'.$this->search.'%');
                                            })
                                            ->latest()
                                            ->paginate(10);

                //                         $this->search === null ?
                // User::latest()->where('role', '!=', 'Mhs')->where('role', '!=', 'Admin')
                //     ->paginate($this->paginate) :
                // User::latest()->where('role', '!=', 'Mhs')->where('role', '!=', 'Admin')
                //     ->where('name', 'like', '%' . $this->search . '%')
                //     ->paginate($this->paginate)

        return view('livewire.surat-masuk-umum.index', [
            'daftar_surat' => $daftar_surat
        ]);
    }
}