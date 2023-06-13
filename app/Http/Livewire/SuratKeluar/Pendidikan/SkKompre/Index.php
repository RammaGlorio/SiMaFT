<?php

namespace App\Http\Livewire\SuratKeluar\Pendidikan\SkKompre;

use Livewire\Component;
use App\Models\SuratKeluarSkKompre;
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

    public $data_surat_masuk, $id_surat, $nama_mhs, $nim, $jurusan_prodi, $memperhatikan, $tanggal_surat, $tanggal_ujian, $waktu_ujian, $tempat_ujian, $judul_skripsi, $sekertaris, $wakil_sekertaris;
    public $nama_dosen, $daftar_dosen_penguji = [];

    public $selectedId; // menyimpan id untuk surat yg dipilih untuk diproses

    public function mount()
    {
        $this->data_surat_masuk = SuratMasukUmum::where('jenis_surat', 'sk_kompre')
                                                ->where('status', 'pendidikan')   
                                                ->whereDoesntHave('skKompre')
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
            $data_surat = SuratKeluarSkKompre::where('id', $id)->where('status', 'pendidikan')->first();
    
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

        // $this->validate([

        // ]);

        $this->validate(
            [
                'id_surat'              => 'required',
                'nama_mhs'              => 'required',
                'nim'                   => 'required',
                'jurusan_prodi'         => 'required',
                'memperhatikan'         => 'required',
                'tanggal_surat'         => 'required',
                'tanggal_ujian'         => 'required',
                'waktu_ujian'           => 'required',
                'tempat_ujian'          => 'required',
                'sekertaris'            => 'required',
                'wakil_sekertaris'      => 'required',
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
            $suratMasuk = SuratKeluarSkKompre::create([
                'id_surat'              => $this->id_surat,
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
            return redirect()->route('surat-keluar.pendidikan.sk-komprehensif.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            session()->flash('error', $th->getMessage());
        }


    }

    public function render()
    {
        $daftar_surat = SuratKeluarSkKompre::where('status', 'pendidikan')
                                        ->where('status_selesai', null)
                                        ->where(function($q){
                                            $q->where('nama_mhs', 'like','%'.$this->search.'%')
                                                ->orWhere('nim', 'like','%'.$this->search.'%')
                                                ->orWhere('jurusan_prodi', 'like','%'.$this->search.'%');
                                        })
                                        ->latest()
                                        ->paginate(10);

        return view('livewire.surat-keluar.pendidikan.sk-kompre.index', [
            'daftar_surat' => $daftar_surat
        ]);
    }
}
