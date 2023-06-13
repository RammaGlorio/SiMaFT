<?php

namespace App\Http\Livewire\Arsip\SuratKeluar\SkKompre;

use Livewire\Component;
use App\Models\SuratKeluarSkKompre;
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
        $daftar_surat = SuratKeluarSkKompre::where('status_selesai', 'selesai')
                                                ->where(function($q){
                                                    $q->where('nama_mhs', 'like','%'.$this->search.'%')
                                                        ->orWhere('nim', 'like','%'.$this->search.'%')
                                                        ->orWhere('jurusan_prodi', 'like','%'.$this->search.'%');
                                                })
                                                ->latest()
                                                ->paginate(10);

        return view('livewire.arsip.surat-keluar.sk-kompre.index', [
            'daftar_surat' => $daftar_surat
        ]);
    }
}
