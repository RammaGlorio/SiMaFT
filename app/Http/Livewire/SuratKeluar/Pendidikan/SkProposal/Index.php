<?php

namespace App\Http\Livewire\SuratKeluar\Pendidikan\SkProposal;

use Livewire\Component;
use App\Models\SuratKeluarSkProposal;
use App\Models\SuratMasukUmum;
use App\Models\LogSuratKeluar;
use Livewire\WithPagination;
use App\Models\LacakSurat;
use DB;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $searchText, $search; 

    public $data_surat_masuk, $id_surat, $nama_mhs, $nim, $jurusan_prodi, $memperhatikan, $tanggal_surat, $judul_skripsi, $sekertaris;
    public $nama_dosen, $daftar_dosen_penguji = [];

    public $selectedId; // menyimpan id untuk surat yg dipilih untuk diproses

    public function mount()
    {
        $this->data_surat_masuk = SuratMasukUmum::where('jenis_surat', 'sk_proposal')
                                                ->where('status', 'pendidikan')   
                                                ->whereDoesntHave('skProposal')
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

    public function simpan_kirim($id)
    {
        DB::beginTransaction();

        $this->dispatchBrowserEvent('closeModalConfirmationSimpanKirim');
        
        try {
            $data_surat = SuratKeluarSkProposal::where('id', $id)->where('status', 'pendidikan')->first();
    
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

        $this->validate(
            [
                'id_surat'              => 'required',
                'nama_mhs'              => 'required',
                'nim'                   => 'required',
                'jurusan_prodi'         => 'required',
                'memperhatikan'         => 'required',
                'tanggal_surat'         => 'required',
                'sekertaris'            => 'required',
                'judul_skripsi'         => 'required',
                'daftar_dosen_penguji'  => 'required',
            ],
            [
                'id_surat.required'              => 'Tidak boleh kosong.',
                'nama_mhs.required'              => 'Tidak boleh kosong.',
                'nim.required'                   => 'Tidak boleh kosong.',
                'jurusan_prodi.required'         => 'Tidak boleh kosong.',
                'memperhatikan.required'         => 'Tidak boleh kosong.',
                'tanggal_surat.required'         => 'Tidak boleh kosong.',
                'sekertaris.required'            => 'Tidak boleh kosong.',
                'judul_skripsi.required'         => 'Tidak boleh kosong.',
                'daftar_dosen_penguji.required'  => 'Tidak boleh kosong.',
            ]
        );

        try {
            $suratMasuk = SuratKeluarSkProposal::create([
                'id_surat'              => $this->id_surat,
                'nama_mhs'              => $this->nama_mhs,
                'nim'                   => $this->nim,
                'jurusan_prodi'         => $this->jurusan_prodi,
                'memperhatikan'         => $this->memperhatikan,
                'tanggal_surat'         => $this->tanggal_surat,
                'sekertaris'            => $this->sekertaris,
                'judul_skripsi'         => $this->judul_skripsi,
                'dosen_penguji'         => json_encode($this->daftar_dosen_penguji),
                'status'                => 'pendidikan'
            ]);
    
            LacakSurat::create([
                'id_surat' => $this->id_surat,
                'type' => 'surat_keluar',
                'posisi' => 'pendidikan'
            ]);
    
            DB::commit();

            //flash message
            session()->flash('message', 'Berhasil Diproses.');
    
            //redirect
            return redirect()->route('surat-keluar.pendidikan.sk-proposal.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
        }


    }

    public function render()
    {
        $daftar_surat = SuratKeluarSkProposal::where('status', 'pendidikan')
                                        ->where('status_selesai', null)
                                        ->where(function($q){
                                            $q->where('nama_mhs', 'like','%'.$this->search.'%')
                                                ->orWhere('nim', 'like','%'.$this->search.'%')
                                                ->orWhere('jurusan_prodi', 'like','%'.$this->search.'%');
                                        })
                                        ->latest()
                                        ->paginate(10);

        return view('livewire.surat-keluar.pendidikan.sk-proposal.index', [
            'daftar_surat' => $daftar_surat
        ]);
    }
}
