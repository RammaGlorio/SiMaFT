<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluarSkProposal;
use App\Models\SuratKeluarSkUjianHasil;
use App\Models\SuratKeluarSkKompre;
use App\Models\SuratKeluarSkPembimbingSkripsi;
use App\Models\User;
use PDF;

class PendidikanController extends Controller
{
    public function skProposal($id)
    {
        $data_dekan = User::where('role', 'Dekan')->first();
        $data_pd1 = User::where('role', 'PD1')->first();
        $surat_keluar = SuratKeluarSkProposal::find($id);

        if(!$surat_keluar) return abort(404);

        $img_ttd_dekan=null; $img_ttd_pd1=null;

        if($data_dekan){
            //MEMBUAT FORMAT GAMBAR TTD DEKAN
            $path_ttd_dekan = base_path('public/upload/' . $data_dekan->tanda_tangan);
            $type_ttd_dekan = pathinfo($path_ttd_dekan, PATHINFO_EXTENSION);
            $file_ttd_dekan = file_get_contents($path_ttd_dekan);
            $img_ttd_dekan = 'data:image/' . $type_ttd_dekan . ';base64,' . base64_encode($file_ttd_dekan);
        }
        // dd($data_pd1->tanda_tangan, $data_dekan->tanda_tangan);
        if($data_pd1){
            //MEMBUAT FORMAT GAMBAR TTD PD1
            $path_ttd_pd1 = base_path('public/upload/' . $data_pd1->tanda_tangan);
            $type_ttd_pd1 = pathinfo($path_ttd_pd1, PATHINFO_EXTENSION);
            $file_ttd_pd1 = file_get_contents($path_ttd_pd1);
            $img_ttd_pd1 = 'data:image/' . $type_ttd_pd1 . ';base64,' . base64_encode($file_ttd_pd1);
        }

        //MEMBUAT FORMAT LOGO UNIMA
        $path = base_path('public/asset/img/unima.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $file = file_get_contents($path);
        $img_logo = 'data:image/' . $type . ';base64,' . base64_encode($file); 
    
        $pdf = PDF::loadView('format-surat-keluar.pendidikan.sk-proposal',
                    compact('img_logo', 'img_ttd_dekan', 'img_ttd_pd1', 'surat_keluar'))
                    ->setpaper('A4', 'potrait');
        return $pdf->stream();
    }

    public function skUjianHasil($id)
    {
        $data_dekan = User::where('role', 'Dekan')->first();
        $data_pd1 = User::where('role', 'PD1')->first();
        $surat_keluar = SuratKeluarSkUjianHasil::find($id);

        if(!$surat_keluar) return abort(404);

        $img_ttd_dekan=null; $img_ttd_pd1=null;

        if($data_dekan){
            //MEMBUAT FORMAT GAMBAR TTD DEKAN
            $path_ttd_dekan = base_path('public/upload/' . $data_dekan->tanda_tangan);
            $type_ttd_dekan = pathinfo($path_ttd_dekan, PATHINFO_EXTENSION);
            $file_ttd_dekan = file_get_contents($path_ttd_dekan);
            $img_ttd_dekan = 'data:image/' . $type_ttd_dekan . ';base64,' . base64_encode($file_ttd_dekan);
        }

        if($data_pd1){
            //MEMBUAT FORMAT GAMBAR TTD PD1
            $path_ttd_pd1 = base_path('public/upload/' . $data_pd1->tanda_tangan);
            $type_ttd_pd1 = pathinfo($path_ttd_pd1, PATHINFO_EXTENSION);
            $file_ttd_pd1 = file_get_contents($path_ttd_pd1);
            $img_ttd_pd1 = 'data:image/' . $type_ttd_pd1 . ';base64,' . base64_encode($file_ttd_pd1);
        }

        //MEMBUAT FORMAT LOGO UNIMA
        $path = base_path('public/asset/img/unima.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $file = file_get_contents($path);
        $img_logo = 'data:image/' . $type . ';base64,' . base64_encode($file); 
    
        $pdf = PDF::loadView('format-surat-keluar.pendidikan.sk-ujian-hasil',
                    compact('img_logo', 'img_ttd_dekan', 'img_ttd_pd1', 'surat_keluar'))
                    ->setpaper('A4', 'potrait');
        return $pdf->stream();
    }

    public function skKompre($id)
    {
        $data_dekan = User::where('role', 'Dekan')->first();
        $data_pd1 = User::where('role', 'PD1')->first();
        $surat_keluar = SuratKeluarSkKompre::find($id);

        if(!$surat_keluar) return abort(404);

        $img_ttd_dekan=null; $img_ttd_pd1=null;

        if($data_dekan){
            //MEMBUAT FORMAT GAMBAR TTD DEKAN
            $path_ttd_dekan = base_path('public/upload/' . $data_dekan->tanda_tangan);
            $type_ttd_dekan = pathinfo($path_ttd_dekan, PATHINFO_EXTENSION);
            $file_ttd_dekan = file_get_contents($path_ttd_dekan);
            $img_ttd_dekan = 'data:image/' . $type_ttd_dekan . ';base64,' . base64_encode($file_ttd_dekan);
        }

        if($data_pd1){
            //MEMBUAT FORMAT GAMBAR TTD PD1
            $path_ttd_pd1 = base_path('public/upload/' . $data_pd1->tanda_tangan);
            $type_ttd_pd1 = pathinfo($path_ttd_pd1, PATHINFO_EXTENSION);
            $file_ttd_pd1 = file_get_contents($path_ttd_pd1);
            $img_ttd_pd1 = 'data:image/' . $type_ttd_pd1 . ';base64,' . base64_encode($file_ttd_pd1);
        }

        //MEMBUAT FORMAT LOGO UNIMA
        $path = base_path('public/asset/img/unima.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $file = file_get_contents($path);
        $img_logo = 'data:image/' . $type . ';base64,' . base64_encode($file); 
    
        $pdf = PDF::loadView('format-surat-keluar.pendidikan.sk-komprehensif',
                    compact('img_logo', 'img_ttd_dekan', 'img_ttd_pd1', 'surat_keluar'))
                    ->setpaper('A4', 'potrait');
        return $pdf->stream();
    }

    public function skPembimbingSkripsi($id)
    {
        $data_dekan = User::where('role', 'Dekan')->first();
        $data_pd1 = User::where('role', 'PD1')->first();
        $surat_keluar = SuratKeluarSkPembimbingSkripsi::find($id);

        if(!$surat_keluar) return abort(404);

        $img_ttd_dekan=null; $img_ttd_pd1=null;

        if($data_dekan){
            //MEMBUAT FORMAT GAMBAR TTD DEKAN
            $path_ttd_dekan = base_path('public/upload/' . $data_dekan->tanda_tangan);
            $type_ttd_dekan = pathinfo($path_ttd_dekan, PATHINFO_EXTENSION);
            $file_ttd_dekan = file_get_contents($path_ttd_dekan);
            $img_ttd_dekan = 'data:image/' . $type_ttd_dekan . ';base64,' . base64_encode($file_ttd_dekan);
        }

        if($data_pd1){
            //MEMBUAT FORMAT GAMBAR TTD PD1
            $path_ttd_pd1 = base_path('public/upload/' . $data_pd1->tanda_tangan);
            $type_ttd_pd1 = pathinfo($path_ttd_pd1, PATHINFO_EXTENSION);
            $file_ttd_pd1 = file_get_contents($path_ttd_pd1);
            $img_ttd_pd1 = 'data:image/' . $type_ttd_pd1 . ';base64,' . base64_encode($file_ttd_pd1);
        }

        //MEMBUAT FORMAT LOGO UNIMA
        $path = base_path('public/asset/img/unima.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $file = file_get_contents($path);
        $img_logo = 'data:image/' . $type . ';base64,' . base64_encode($file); 
    
        $pdf = PDF::loadView('format-surat-keluar.pendidikan.sk-pembimbing-skripsi',
                    compact('img_logo', 'img_ttd_dekan', 'img_ttd_pd1', 'surat_keluar'))
                    ->setpaper('A4', 'potrait');
        return $pdf->stream();
    }
}
