<?php

namespace App\Http\Livewire\SuratKeluar\Kemahasiswaan\KartuMahasiswa;

use Livewire\Component;
use App\Models\SuratKeluarKartuMahasiswa;
use App\Models\SuratMasukUmum;
use Livewire\WithPagination;
use App\Models\LacakSurat;
use DB;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $searchText, $search; 
    
    public $data_surat_masuk, $id_surat, $nama_mhs, $nim, $jurusan_prodi;

    public $selectedId; // menyimpan id untuk surat yg dipilih untuk diproses

    public function mount()
    {
        $this->data_surat_masuk = SuratMasukUmum::where('jenis_surat', 'ket_kartu_mhs')
                                                ->where('status', 'kemahasiswaan')   
                                                // ->whereDoesntHave('kartuMahasiswa')
                                                ->get(['id', 'perihal_surat']);
    }

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

    public function openModalConfirmation()
    {
        $this->dispatchBrowserEvent('openModalConfirmation');
    }

    public function simpan_kirim($id)
    {
        DB::beginTransaction();

        $this->dispatchBrowserEvent('closeModalConfirmationSimpanKirim');
        
        try {
            $data_surat = SuratKeluarKartuMahasiswa::where('id', $id)->where('status', 'kemahasiswaan')->first();
    
            $data_surat->update([
                'status' => 'kabag'
            ]);
    
            LacakSurat::create([
                'id_surat' => $data_surat->id_surat,
                'type' => 'surat_keluar',
                'posisi' => 'kabag'
            ]);

            DB::commit();
    
            //flash message
            session()->flash('message', 'Berhasil Disimpan.');
    
            //redirect
            // return redirect()->route('surat-keluar.kemahasiswaan.kartu-mahasiswa.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
            // dd($th->getMessage());
        }
    }

    public function store()
    {
        DB::beginTransaction();

        $this->dispatchBrowserEvent('closeModalConfirmation');

        $this->validate(
            [
                'id_surat'          => 'required',
                'nama_mhs'          => 'required',
                'nim'               => 'required',
                'jurusan_prodi'     => 'required'
            ],
            [
                'id_surat.required'              => 'Tidak boleh kosong.',
                'nama_mhs.required'              => 'Tidak boleh kosong.',
                'nim.required'                   => 'Tidak boleh kosong.',
                'jurusan_prodi.required'         => 'Tidak boleh kosong.',
            ]
        );

        try {
            $suratMasuk = SuratKeluarKartuMahasiswa::create([
                'id_surat'          => $this->id_surat,
                'nama_mhs'          => $this->nama_mhs,
                'nim'               => $this->nim,
                'jurusan_prodi'     => $this->jurusan_prodi,
                'status'            => 'kemahasiswaan'
            ]);
    
            LacakSurat::create([
                'id_surat' => $this->id_surat,
                'type' => 'surat_keluar',
                'posisi' => 'kemahasiswaan'
            ]);
    
            DB::commit();

            //flash message
            session()->flash('message', 'Berhasil Diproses.');
    
            //redirect
            return redirect()->route('surat-keluar.kemahasiswaan.kartu-mahasiswa.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
        }


    }

    public function render()
    {
        $daftar_surat = SuratKeluarKartuMahasiswa::where('status', 'kemahasiswaan')
                                        ->where('status_selesai', null)
                                        ->where(function($q){
                                            $q->where('nama_mhs', 'like','%'.$this->search.'%')
                                                ->orWhere('nim', 'like','%'.$this->search.'%')
                                                ->orWhere('jurusan_prodi', 'like','%'.$this->search.'%');
                                        })
                                        ->latest()
                                        ->paginate(10);

        return view('livewire.surat-keluar.kemahasiswaan.kartu-mahasiswa.index', [
            'daftar_surat' => $daftar_surat
        ]);
    }
}
