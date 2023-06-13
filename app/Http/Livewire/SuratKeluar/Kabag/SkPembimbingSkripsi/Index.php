<?php

namespace App\Http\Livewire\SuratKeluar\Kabag\SkPembimbingSkripsi;

use Livewire\Component;
use App\Models\SuratKeluarSkPembimbingSkripsi;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $searchText, $search; 

    public function updated(){
        if($this->searchText === '' || $this->searchText === null) $this->search = null;
        $this->resetPage();
    }

    public function submitSearch(){
        if($this->searchText !== '' || $this->searchText !== null) $this->search = $this->searchText;
        $this->resetPage();
    }

    public function render()
    {
        $daftar_surat = SuratKeluarSkPembimbingSkripsi::where('status', 'kabag')
                                                        ->where('status_selesai', null)
                                                        ->where(function($q){
                                                            $q->where('nama_mhs', 'like','%'.$this->search.'%')
                                                                ->orWhere('nim', 'like','%'.$this->search.'%')
                                                                ->orWhere('jurusan_prodi', 'like','%'.$this->search.'%');
                                                        })
                                                        ->latest()
                                                        ->paginate(10);

        return view('livewire.surat-keluar.kabag.sk-pembimbing-skripsi.index', [
            'daftar_surat' => $daftar_surat
        ]);
    }
}
