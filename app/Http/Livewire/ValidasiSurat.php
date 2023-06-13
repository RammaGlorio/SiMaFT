<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SuratKeluarKartuMahasiswa;
use App\Models\SuratKeluarSkPembimbingSkripsi;
use App\Models\SuratKeluarSkProposal;
use App\Models\SuratKeluarSkUjianHasil;
use App\Models\SuratKeluarSkKompre;

class ValidasiSurat extends Component
{

public $detailSurat;

    public function mount($id)
    {
        $data = ['nama_mhs','nim','nomor_surat','jurusan_prodi'];

        $kartuMahasiswa = SuratKeluarKartuMahasiswa::where('id',$id)->first($data);
        $skPembimbingSkripsi = SuratKeluarSkPembimbingSkripsi::where('id',$id)->first($data);
        $skProposal = SuratKeluarSkProposal::where('id',$id)->first($data);
        $skUjianHasil = SuratKeluarSkUjianHasil::where('id',$id)->first($data);
        $skKompre = SuratKeluarSkKompre::where('id',$id)->first($data);

        if($kartuMahasiswa){
            $this->detailSurat = $kartuMahasiswa;
            $this->detailSurat->jenis_surat = 'Keterangan Kartu Mahasiswa';
        }
        elseif($skPembimbingSkripsi){
            $this->detailSurat = $skPembimbingSkripsi;
            $this->detailSurat->jenis_surat = 'SK Pembimbing Skripsi';
        }
        elseif($skProposal){
            $this->detailSurat = $skProposal;
            $this->detailSurat->jenis_surat = 'SK Proposal';
        }
        elseif($skUjianHasil){
            $this->detailSurat = $skUjianHasil;
            $this->detailSurat->jenis_surat = 'SK Ujian Hasil';
        }
        elseif($skKompre){
            $this->detailSurat = $skKompre;
            $this->detailSurat->jenis_surat = 'SK Komprehensif';
        }

        // dd($this->detailSurat);

        // if(!$this->detailSurat) return abort(404);
    }

    public function render()
    {
        return view('livewire.validasi-surat')->layout('layouts.validasi-surat');
    }
}
