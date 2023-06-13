<?php

namespace App\Http\Livewire\SuratMasukUmum\Kabag;

use Livewire\Component;
use App\Models\SuratMasukUmum;
use Livewire\WithPagination;

class Pd3Index extends Component
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
        $daftar_surat = SuratMasukUmum::where('status', 'kabag')
                                        ->where('disposisi_pd', 'pd3')
                                        ->where(function($q){
                                            $q->where('no_surat_masuk', 'like','%'.$this->search.'%')
                                                ->orWhere('pengirim', 'like','%'.$this->search.'%');
                                        })
                                        ->latest()
                                        ->paginate(10);

        return view('livewire.surat-masuk-umum.kabag.pd3-index', [
            'daftar_surat' => $daftar_surat
        ]);
    }
}
