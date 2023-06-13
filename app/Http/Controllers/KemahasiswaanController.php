<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluarKartuMahasiswa;
use App\Models\User;
use PDF;

class KemahasiswaanController extends Controller
{

    public function kartuMahasiswa($id)
    {
        $data_dekan = User::where('role', 'Dekan')->first();
        $data_pd3 = User::where('role', 'PD3')->first();
        $surat_keluar = SuratKeluarKartuMahasiswa::find($id);

        if(!$surat_keluar) return abort(404);

        $img_ttd_dekan=null; $img_ttd_pd3=null;

        if($data_dekan){
            //MEMBUAT FORMAT GAMBAR TTD DEKAN
            $path_ttd_dekan = base_path('public/upload/' . $data_dekan->tanda_tangan);
            $type_ttd_dekan = pathinfo($path_ttd_dekan, PATHINFO_EXTENSION);
            $file_ttd_dekan = file_get_contents($path_ttd_dekan);
            $img_ttd_dekan = 'data:image/' . $type_ttd_dekan . ';base64,' . base64_encode($file_ttd_dekan);
        }
        
        if($data_pd3){
            //MEMBUAT FORMAT GAMBAR TTD PD3
            $path_ttd_pd3 = base_path('public/upload/' . $data_pd3->tanda_tangan);
            $type_ttd_pd3 = pathinfo($path_ttd_pd3, PATHINFO_EXTENSION);
            $file_ttd_pd3 = file_get_contents($path_ttd_pd3);
            $img_ttd_pd3 = 'data:image/' . $type_ttd_pd3 . ';base64,' . base64_encode($file_ttd_pd3);
        }

        //MEMBUAT FORMAT LOGO UNIMA
        $path = base_path('public/asset/img/unima.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $file = file_get_contents($path);
        $img_logo = 'data:image/' . $type . ';base64,' . base64_encode($file); 

        $pdf = PDF::loadView('format-surat-keluar.kemahasiswaan.keterangan-kartu-mhs',
                    compact('img_logo', 'img_ttd_dekan', 'img_ttd_pd3', 'surat_keluar'))
                    ->setpaper('A4', 'potrait');
        return $pdf->stream();
    }

}
