<!DOCTYPE html>
<head>
    <title>SK Pembimbing Skripsi</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: 670px; 
            height: auto; 
            position: absolute; 
            margin-left: 25px;
            margin-top: -20px;
        }

        #kop {
            line-height: 1px;
        }

        hr{
            border-top: 4px double #000000;
        }

        .img {
            position: absolute; 
            top: 8px; 
            right: 568px;
       }

       h4{
           margin-bottom: -8px;
       }

       h5{
           margin-bottom: -1px;
       }

       #kop p{
           margin-bottom: -3px;
       }
          
       .border-collapse {
           border: 1px solid black;
           border-collapse: collapse;
       }

       .qrcode{
            /* position: sticky;
            left: -20;
            bottom: -20; */
       }

    </style>

</head>

<body>
    <div id=halaman>
        <img class="img" src="{{ $img_logo }}" alt="" width="85px">
        <div id="kop" style="text-align: center;">
            <h3>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN,</h3>
            <h3>RISET DAN TEKNOLOGI</h3>
            <h3>UNIVERSITAS NEGERI MANADO</h3>
            <h5>ALAMAT : KAMPUS UNIMA TONDANO 95618</h5>
            <p style="font-size: 13px"><b>Telp. (0431)321845, 321846, 321847 Fax: (0431) 321866<b></p>
            <hr>
        </div>

        <div style="line-height: 3px; text-align : center; font-size: 14px">
            <p>KEPUTUSAN</p>
            <p>DEKAN FAKULTAS TEKNIK UNIVERSITAS NEGERI MANADO </p>
            <span>NOMOR : {{ $surat_keluar?->nomor_surat ? $surat_keluar->nomor_surat : "....." }}</span>
            <div style="font-style: italic; font-weight: bold; text-align: center"><p>Tentang</p></div>
        </div>

        <div style="line-height: 3px; text-align : center; font-size: 14px; font-weight: bold; text-transform: uppercase">
            <p>PENUNJUKAN DAN PENGANGKATAN DOSEN PEMBIMBING UNIMA</p>
            <p>A.N. {{ $surat_keluar?->nama_mhs ? $surat_keluar->nama_mhs : "....."  }}, NIM. {{ $surat_keluar?->nim ? $surat_keluar->nim : "....." }}, MAHASISWA PROGRAM S1</p>
            <p>{{ $surat_keluar?->jurusan_prodi ? $surat_keluar->jurusan_prodi : "....." }} FT UNIMA</p>
        </div>

        <div style="line-height: 3px; text-align : center; font-size: 14px; font-weight: bold">
            <p>DEKAN FAKULTAS TEKNIK UNIVERSITAS NEGERI MANADO </p>
        </div>

        <table>
            <tr style="vertical-align: top">
                <td style="width: 14%; font-size: 14px;">Menimbang</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <ol style="margin-top: 0">
                        <li>Bahwa untuk membimbing dan mengarahkan dalam rangka penyusunan Skripsi mahasiswa Program S1, 
                            {{ $surat_keluar?->jurusan_prodi ? $surat_keluar->jurusan_prodi : "....." }} FT UNIMA, perlu menunjuk dan mengangkat Dosen Pembimbing Skripsi;</li>
                        <li>Bahwa dosen yang namanya tercantum pada lanjur 2 memenuhi syarat diangkat sebagai pembimbing I dan II mahasiswa yang namanya tercantum pada lanjur 3
                            dengan judul terlampir pada lanjur 4 dalam lampiran surat keputusan ini.;
                        </li>
                        <li>Bahwa untuk maksud tersebut pada butir 1 dan 2 , perlu menerbitkan Surat Keputusannya.</li>
                    </ol>
                </td>
            </tr>
            <tr style="vertical-align: top">
                <td style="width: 14%; font-size: 14px">Mengingat</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <ol style="margin-top: 0">
                        <li>Undang-Undang Nomor: 20 Tahun 2003, tentang Sistem Pendidikan Nasional; 
                            <div>Undang-Undang Nomor: 14 Tahun 2005, tentang Guru dan Dosen;</div>
                        </li>
                        <li>Peraturan Pemerintah Nomor: 60 Tahun 1999, tentang Pendidikan Tinggi;
                            <div>Peraturan Pemerintah Nomor: 19 Tahun 2005, tentang Standar Nasional Pendidikan</div>    
                        </li>
                        <li>Keputusan Presiden RI: Nomor: 127/O/2000, tentang Konversi IKIP menjadi UNIMA;</li>
                        <li>Peraturan Menteri Pendidikan, Kebudayaan, Riset Teknologi;
                            <br>
                            <div>- Nomor : 17 Tahun 2022, tentang Struktur Organisasi Tata Kerja Universitas Negeri Manado</div>
                            <div>- Nomor : 46 Tahun 2022 tentang Statuta Universitas Negeri Manado</div>
                        </li>
                        <li>Keputusan Menteri Pendidikan Nasional RI, Nomor: 232/U/Tahun 2022, tentang Kurikulum;</li>
                        <li>Keputusan Menteri Pendidikan, Kebudayaan, Riset Teknologi : Nomor: 75037/MPK/RHS/KP/2020, 1 Sept
                            2020, tentang Pengangkatan Rektor Universitas Negeri Manado Periode Tahun 2020-2024</li>
                        <li>Keputusan Rektor UNIMA : Nomor: 1083/UN41/KP/2022, tanggal 20 September 2022, tentang Pengangkatan
                            Dekan FT UNIMA. 
                            </li>
                        <li>
                            <div> Keputusan Dekan Fakultas Teknik UNIMA;</div>
                            <div> Nomor:709a/UN41.2/HK/2012 tanggal, 14 April 2012 2012 tentang Pengahapusan Mata Kuliah Tugas Akhir</div>
                            <div> Pada Jurusan Dan Prodi Se Fakultas Teknik UNIMA;</li></div>
                    </ol>
                </td>
            </tr>
            <tr style="vertical-align: top">
                <td style="width: 14%; font-size: 14px">Memperhatikan</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 13px">
                    <div style="margin-left: 25px">{{ $surat_keluar?->memperhatikan ? $surat_keluar->memperhatikan : "....." }}, 
                        {{ $surat_keluar?->tanggal_surat ? $surat_keluar->tanggal_surat->translatedFormat('d F Y') : "....." }}
                    </div>
                    <div style="margin-left: 25px; font-weight: bold; text-transform: uppercase">A.N. {{ $surat_keluar?->nama_mhs ? $surat_keluar->nama_mhs : "....."  }}, NIM. {{ $surat_keluar?->nim ? $surat_keluar->nim : "....." }}</div>
                </td>
            </tr>
        </table>

        <div style="line-height: 3px; text-align : center; font-size: 14px; font-weight: bold">
            <p>MEMUTUSKAN</p>
        </div>

        <table>
            <tr>
                <td style="width: 14%; font-size: 14px">Menetapkan</td>
                <td style="width: 1%; font-size: 14px">:</td>
            </tr>
            <tr>
                <td style="width: 14%; font-size: 14px">Pertama</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <div style="margin-left: 25px;">Menunjuk dan Mengangkat Dosen Pembimbing Skripsi mahasiswa Program S1 {{ $surat_keluar?->jurusan_prodi ? $surat_keluar->jurusan_prodi : "....." }} FT
                        UNIMA sebagaimana tercantum pada lampiran Surat Keputusan ini.</div>
                </td>
            </tr>
            <tr>
                <td style="width: 14%; font-size: 14px">Kedua</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <div style="margin-left: 25px;">Menugaskan kepada Dosen Pembimbing Skripsi untuk memberikan bimbingan dan pengarahan dalam penyusunan Skripsi untuk menempuh Ujian Sarjana.</div>
                </td>
            </tr>
            <tr>
                <td style="width: 14%; font-size: 14px">Ketiga</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <div style="margin-left: 25px;">Biaya pelaksanaan kegiatan ini dibebankan pada DIPA Unima.</div>
                </td>
            </tr>
            <tr>
                <td style="width: 14%; font-size: 14px">Keempat</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <div style="margin-left: 25px;">Keputusan ini berlaku sejak tanggal ditetapkan dengan ketentuan apabila terdapat kekeliruan 
                    dalam penetapan ini akan diperbaiki sebagaimana mestinya.</div>
                </td>
            </tr>
        </table>

        <br>
 
        <div style="width: 35%; text-align: left; float: right; font-size: 13px">
            
            <div>Ditetapkan di : Tondano</div>
            <div>Pada tanggal : {{ $surat_keluar?->nomor_surat && $surat_keluar?->status_selesai ? $surat_keluar->updated_at->translatedFormat('d F Y') : "....." }}</div>
            <div style="font-weight: bold">
                @if($surat_keluar?->tanda_tangan === 'pd1')
                    <div style="">a.n DEKAN</div>
                    WAKIL DEKAN I,
                @else
                    DEKAN,
                @endif
                <br>      
                @if($surat_keluar->tanda_tangan === 'dekan')            
                    @if($img_ttd_dekan)    
                        <img style="margin-top: -10; margin-bottom: -10; margin-left: 20; z-index: -10" src="{{ $img_ttd_dekan }}" alt="" height="100px"><br>
                    @else
                        <br><br><br><br>
                    @endif
                @elseif($surat_keluar->tanda_tangan === 'pd1')
                    @if($img_ttd_pd1)    
                        <img style="margin-top: -10; margin-bottom: -10; margin-left: 20; z-index: -10" src="{{ $img_ttd_pd1 }}" alt="" height="100px"><br>
                    @else
                        <br><br><br><br>
                    @endif
                @else
                    <br><br><br><br>
                @endif
    
                @if($surat_keluar?->tanda_tangan === 'pd1')
                    <u>Dr. Hendro M. Sumual, ST, M.Eng</u><br>
                    NIP. 19840522 200801 1 005
                @else                
                    <u>Dr. Eddy D. R. Kembuan, M.Pd</u><br>
                    NIP. 19620729 198803 1 001
                @endif
            </div>
        </div>

        <br><br><br><br>

        <div style="font-size: 12px">
            <span>Tembusan:</span><br>
            <div>1.Rektor UNIMA di Tondano</div>
            <div>2. Ketua-Ketua Lembaga dan Kepala Perpustakaan UNIMA</div>
            <div>3. Pimpinan Jurusan/Prodi FT UNIMA</div>
            <div>4. Ybs. untuk diketahui dan dilaksanakan.</div>
        </div>

        <div style="page-break-before: always"></div>

        {{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

        <div style="width: 50%; text-align: left; float: right; font-size: 13px">
            <div style="line-height: 23px font-size: 14px; font-weight: bold; font-style: italic">
                <div>LAMPIRAN SURAT KEPUTUSAN DEKAN FT UNIMA</div>
                <div>NOMOR <span style="margin-left: 50px">: {{ $surat_keluar?->nomor_surat ? $surat_keluar->nomor_surat : "....." }}</span></div>
                <div>TANGGAL <span style="margin-left: 38px">:</span></div>
            </div>
            <div style="border-bottom: 2px solid; margin-top: 10px"></div>
        </div>

        <br><br><br><br><br>

        <div style="line-height: 3px; text-align : center; font-size: 14px; font-weight: bold; text-transform: uppercase">
            <p>NAMA - NAMA DOSEN PEMBIMBING SKRIPSI</p>
            <p>A. N. {{ $surat_keluar?->nama_mhs ? $surat_keluar->nama_mhs : "....."  }}, NIM. {{ $surat_keluar?->nim ? $surat_keluar->nim : "....." }}, MAHASISWA PROGRAM S1 </p>
            <p>{{ $surat_keluar?->jurusan_prodi ? $surat_keluar->jurusan_prodi : "....." }} FT UNIMA</p>
        </div>

        <br>

        <table class="border-collapse" width="100%">
            <tr style="text-align: center; font-weight: bold;">
                <td class="border-collapse" style="width: 5%;">NO</td>
                <td class="border-collapse" style="width: 25%;">DOSEN PEMBIMBING</td>
                <td class="border-collapse" style="width: 30%;">NAMA DAN NIM</td>
                <td class="border-collapse">JUDUL SKRIPSI</td>
            </tr>
            <tr style="vertical-align: top">
                <td class="border-collapse" style="width: 5%; vertical-align: top; text-align: center; padding: 4px;">1</td>
                <td class="border-collapse">
                    <ol style="margin-left: -10px; margin-top: 3px">
                        @if($surat_keluar?->dosen_pembimbing)                            
                            @foreach (json_decode($surat_keluar->dosen_pembimbing) as $data)    
                                <li>{{ $data }}</li>
                            @endforeach
                        @else
                            .....
                        @endif
                    </ol>
                </td>  
                <td class="border-collapse" style="width: 10%; vertical-align: top; text-align: center; padding: 4px; text-transform: uppercase; font-weight: bold;">
                    <span>
                        {{ $surat_keluar?->nama_mhs ? $surat_keluar->nama_mhs : "....."  }}
                    </span>
                    <br>
                    <span>
                        {{ $surat_keluar?->nim ? $surat_keluar->nim : "....." }}
                    </span>
                </td>
                <td class="border-collapse" style="vertical-align: top; padding: 4px;">
                    {{ $surat_keluar?->judul_skripsi ? $surat_keluar->judul_skripsi : "....." }}
                </td>   
            </tr>
        </table>

        <br><br><br>

        <div style="width: 35%; text-align: left; float: right; font-size: 13px">

            <div style="font-weight: bold">
                @if($surat_keluar?->tanda_tangan === 'pd1')
                    <div style="">a.n DEKAN</div>
                    WAKIL DEKAN I,
                @else
                    DEKAN,
                @endif
                <br>      
                @if($surat_keluar->tanda_tangan === 'dekan')            
                    @if($img_ttd_dekan)    
                        <img style="margin-top: -10; margin-bottom: -10; margin-left: 20; z-index: -10" src="{{ $img_ttd_dekan }}" alt="" height="100px"><br>
                    @else
                        <br><br><br><br>
                    @endif
                @elseif($surat_keluar->tanda_tangan === 'pd1')
                    @if($img_ttd_pd1)    
                        <img style="margin-top: -10; margin-bottom: -10; margin-left: 20; z-index: -10" src="{{ $img_ttd_pd1 }}" alt="" height="100px"><br>
                    @else
                        <br><br><br><br>
                    @endif
                @else
                    <br><br><br><br>
                @endif
    
                @if($surat_keluar?->tanda_tangan === 'pd1')
                    <u>Dr. Hendro M. Sumual, ST, M.Eng</u><br>
                    NIP. 19840522 200801 1 005
                @else                
                    <u>Dr. Eddy D. R. Kembuan, M.Pd</u><br>
                    NIP. 19620729 198803 1 001
                @endif
            </div>
        </div>
    </div>
    <div class="qrcode" style="position: relative">
        <div style="position: absolute; bottom: -20; left: -20">
            <?php
                $url = url('/');
                $url = $url.'/validasi-surat/'.request()->segment(2)
            ?>
            {!! DNS2D::getBarcodeHTML($url, 'QRCODE',2,2) !!}
            <a href="{{$url}}" style="text-decoration: none;"><div style="font-size: 14px; margin-top: 5px; color:black"><i>Scan Qrcode</i> untuk validasi keaslian surat.</div></a>
        </div>
    </div>
</body>

</html>