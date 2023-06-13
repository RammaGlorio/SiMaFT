<!DOCTYPE html>
<head>
    <title>SK Komprehensif</title>
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
            <p>REKTOR UNIVERSITAS NEGERI MANADO </p>
            <span>NOMOR : {{ $surat_keluar?->nomor_surat ? $surat_keluar->nomor_surat : "....." }}</span>

        </div>
        <br>
        <div style="text-align: center;font-size: 14px">TENTANG</div>

        <div style="text-align : center; font-size: 14px; font-weight: bold; text-transform: uppercase">
            <p>PEMBENTUKAN DAN PENGANGKATAN PANITIA PELAKSANA DAN TIM PENGUJI UJIAN AKHIR
            PROGRAM GELAR S1 KOMPREHENSIF A.N. {{ $surat_keluar?->nama_mhs ? $surat_keluar->nama_mhs : "....."  }}, NIM. {{ $surat_keluar?->nim ? $surat_keluar->nim : "....." }}, 
            {{ $surat_keluar?->jurusan_prodi ? $surat_keluar->jurusan_prodi : "....." }} FT UNIMA</p>
        </div>

        <div style="line-height: 3px; text-align : center; font-size: 14px">
            <p>REKTOR UNIVERSITAS NEGERI MANADO </p>
        </div>

        <table>
            <tr style="vertical-align: top">
                <td style="width: 14%; font-size: 14px;">Menimbang</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <ol type="a" style="margin-top: 0">
                        <li>bahwa sesuai dengan kententuan Akademik bagi mahasiswa yang telah memenuhi syarat diakhiri
                            dengan Ujian Akhir Program/Komprehensif;</li>
                        <li>bahwa untuk maksud butir adipandang perlu membentuk dan mengangkat panitia pelaksana dan tim
                            penguji;</li>
                        <li>bahwa sehubungan dengan maksud butir a dan b, perlu menerbitkan surat keputusannya;</li>
                    </ol>
                </td>
            </tr>
            <tr style="vertical-align: top">
                <td style="width: 14%; font-size: 14px">Mengingat</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <ol style="margin-top: 0">
                        <li>Undang-undang Nomor: 20 Tahun 2003, tentang Sistem Pendidikan Nasional; 
                            <div>Undang-undang Nomor: 14 Tahun 2005, tentang Guru dan Dosen;</div>
                        </li>
                        <li>Peraturan Pemerintah Nomor: 60 Tahun 1999, tentang Pendidikan tinggi;
                            <div>Peraturan Pemerintah Nomor: 19 Tahun 2005, tentang Standar Nasional Pendidikan;</div>    
                        </li>
                        <li>Keputusan Presiden RI: Nomor: 127 Tahun 2000, tentang Konversi IKIP menjadi UNIMA;</li>
                        <li>Peraturan Menteri Pendidikan, Kebudayaan, Riset Teknologi;
                            <br>
                            <div>- Nomor : 17 Tahun 2022, tentang Struktur Organisasi Tata Kerja Universitas Negeri Manado</div>
                            <div>- Nomor : 46 Tahun 2022 tentang Statuta Universitas Negeri Manado</div>
                            <div>Keputusan Menteri Pendidikan Nasional RI, Nomor: 232/U/Tahun 2022, tentang Kurikulum;</div>
                            <div>Keputusan Menteri Pendidikan, Kebudayaan, Riset Teknologi : Nomor: 75037/MPK/RHS/KP/2020, 1 Sept 2020,
                                tentang Pengangkatan Rektor Universitas Negeri Manado Periode Tahun 2020-2024</div>
                        </li>
                        <li>
                            <div> Keputusan Rektor Unima :</div>
                            <div> Nomor:4250/H41/HK/2008, tentang Pemberian Pendegelasian Wewenang Penanda Tanganan Surat</div>
                            <div> Keputusan Untuk Atas Nama Rektor di Bidang Akademik Kepada Dekan;</li></div>
                            <div> Nomor: 383/UN41/KP/2020, tanggal 03 April 2020. tentang Pengangkatan Dekan FT Unima.</div>
                        </li>
                        
                    </ol>
                </td>
            </tr>
            <tr style="vertical-align: top">
                <td style="width: 14%; font-size: 14px">Memperhatikan</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 13px">
                    <div style="margin-left: 25px">{{ $surat_keluar?->memperhatikan ? $surat_keluar->memperhatikan : "....." }}, 
                        {{ $surat_keluar?->tanggal_surat ? $surat_keluar->tanggal_surat->translatedFormat('d F Y') : "....." }} tentang Persetujuan Ujian Akhir / Komprehensif,
                        <span style="font-weight: bold; text-transform: uppercase">A.N. {{ $surat_keluar?->nama_mhs ? $surat_keluar->nama_mhs : "....."  }}, NIM. {{ $surat_keluar?->nim ? $surat_keluar->nim : "....." }}</span>
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <div style="line-height: 3px; text-align : center; font-size: 14px; font-weight: bold">
            MEMUTUSKAN
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
                    <div style="margin-left: 25px;">Membentuk Panitia Pelaksana dan Tim Penguji Ujian Akhir Program/Komprehensif mahasiswa FT
                        Unima yang susunan personalianya sebagaimana tercantum dalam lampiran keputusan ini.</div>
                </td>
            </tr>
            <tr>
                <td style="width: 14%; font-size: 14px">Kedua</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px;">
                    <div style="margin-left: 25px;">Panitia Pelaksana dan Tim Penguji dimaksud bertugas untuk :
                            <div>1. Merencanakan dan melaksanakan Ujian Akhir Program/ Komprehensif</div>
                            <div>2. Melaporkan hasil pelaksanaan ujian kepada Rektor melalui Dekan setelah pelaksanaan ujian.</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="width: 14%; font-size: 14px">Ketiga</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <div style="margin-left: 25px;">Pelaksanaan Ujian Komprehensif /akhir program , dilaksanakan pada :</div>
                    <div style="margin-left: 22px;">
                        <table style="line-height: 10px">
                            <tr>
                                <td>Hari / Tanggal</td>
                                <td>:</td>
                                <td>{{ $surat_keluar?->tanggal_ujian ? $surat_keluar->tanggal_ujian->translatedFormat('d F Y') : "....." }}</td>
                            </tr>
                            <tr>
                                <td>Pukul</td>
                                <td>:</td>
                                <td>{{ $surat_keluar?->tanggal_ujian ? $surat_keluar->waktu_ujian : "....." }}</td>
                            </tr>
                            <tr>
                                <td>Tempat</td>
                                <td>:</td>
                                <td>{{ $surat_keluar?->tanggal_ujian ? $surat_keluar->tempat_ujian : "....." }}</td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="width: 14%; font-size: 14px">Keempat</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <div style="margin-left: 25px;">Biaya pelaksanan Ujian Akhir Program/Komprehensif ini,dibebankan pada anggaran yang sesuai untuk itu.
                    </div>
                </td>
            </tr>
            <tr>
                <td style="width: 14%; font-size: 14px">Kelima</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <div style="margin-left: 25px;">Keputusan ini berlaku sejak tanggal ditetapkan dengan ketentuan apabila ternyata terdapat kekeliruan atas
                        penetapan ini akan diadakan perbaikan sebagaimana mestinya.</div>
                </td>
            </tr>
        </table>

        <br>
 
        <div style="width: 35%; text-align: left; float: right; font-size: 13px">
            <div>Ditetapkan di : Tondano</div>
            <div>Pada tanggal : {{ $surat_keluar?->nomor_surat && $surat_keluar?->status_selesai ? $surat_keluar->updated_at->translatedFormat('d F Y') : "....." }}</div>
            <div>A.n. Rektor</div>
            <div style="font-weight: bold">
                @if($surat_keluar?->tanda_tangan === 'pd1')
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
            <div>1. Kemenristek di Jakarta;</div>
            <div>2. Sesjen Kemenristek di Jakarta;</div>
            <div>3. Irjen Kemenristek di Jakarta;</div>
            <div>4. Dirjen Dikti Kemenristek di Jakarta;</div>
            <div>5. Para Pembantu Rektor UNIMA;</div>
            <div>6. Dekan Fakultas se UNIMA di Tondano;</div>
            <div>7. Kepala Biro Administrasi Akademik dan Kemahasiswaan UNIMA di Tondano;</div>
            <div>8. Yang bersangkutas untuk diketahui dan dilaksanakan.</div>
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

        <div style="line-height: 3px; text-align : center; font-size: 14px; font-weight: bold">
            <p>SUSUNAN PANITIA PELAKSANA UJIAN AKHIR PROGRAM GELAR S1 KOMPREHENSIF </p>
            <p>FAKULTAS TEKNIK UNIMA</p>
        </div>

        <br><br>

        <table>
            <tr style="vertical-align: top">
                <td style="width: 200px;">KETUA</td>
                <td style="width: 5px;">:</td>
                <td style="">
                    REKTOR UNIVERSITAS NEGERI MANADO
                    <br>
                    Prof. Dr. Deitje Katuuk, M.Pd
                </td>
            </tr>
        </table>
        <table>
            <tr style="vertical-align: top">
                <td style="width: 200px;">WAKIL KETUA UMUM</td>
                <td style="width: 5px;">:</td>
                <td style="">
                    PEMBANTU REKTOR I UNIMA
                    <br>
                    Prof. Dr. Orbanus Naharia, M.Si
                </td>
            </tr>
        </table>
        <table>
            <tr style="vertical-align: top">
                <td style="width: 200px;">KETUA PELAKSANA</td>
                <td style="width: 5px;">:</td>
                <td style="">
                    DEKAN FAKULTAS TEKNIK UNIMA
                    <br>
                    Dr. Djubir R. E. Kembuan, M.Pd
                </td>
            </tr>
        </table>
        <table>
            <tr style="vertical-align: top;">
                <td style="width: 200px;">WAKIL KETUA</td>
                <td style="width: 5px;">:</td>
                <td style="">
                    <div>Dr. Hendro M. Sumual, ST, M.Eng (WD Bidang Akademik)</div>
                    <div>Sonny Davi Jooland Mailangkay, ST, MT (WD Bidang Keuangan dan Umum)</div>
                    <div>Dr. Christine T. M. Manoppo, MAP (WD Bidang Kemahasiswaan dan Alumni)</div>
                </td>
            </tr>
        </table>
        <table>
            <tr style="vertical-align: top">
                <td style="width: 200px;">SEKERTARIS</td>
                <td style="width: 5px;">:</td>
                <td style="">{{ $surat_keluar?->sekertaris ? $surat_keluar->sekertaris : "....." }}</td>
            </tr>
        </table>
        <table>
            <tr style="vertical-align: top">
                <td style="width: 200px;">WAKIL SEKERTARIS</td>
                <td style="width: 5px;">:</td>
                <td style="">{{ $surat_keluar?->wakil_sekertaris ? $surat_keluar->wakil_sekertaris : "....." }}</td>
            </tr>
        </table>
        <table>
            <tr style="vertical-align: top">
                <td style="width: 200px;">SEKRETARIAT</td>
                <td style="width: 5px;">:</td>
                <td style="">
                    <ol style="margin-left: -20px">
                        <li>Rita Mangare, SE, M.Pd / Kabag Tata Usaha</li>
                        <li>Meike Supit, SE / Pranata Komputer Ahli Muda</li>
                        <li>Elisabeth A. Sumilat, ST / Staf Pengelola Pendidikan</li>
                    </ol>
                </td>
            </tr>
        </table>

        <br><br><br>

        <div style="width: 35%; text-align: left; float: right; font-size: 13px">
            <div style="font-weight: bold">
                <div>A.n. Rektor</div>
                @if($surat_keluar?->tanda_tangan === 'pd1')
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
            <p>SUSUNAN TIM PENGUJI UJIAN AKHIR PROGRAM GELAR S1KOMPREHENSIF</p>
            <p>A. N. {{ $surat_keluar?->nama_mhs ? $surat_keluar->nama_mhs : "....."  }}, NIM. {{ $surat_keluar?->nim ? $surat_keluar->nim : "....." }}, MAHASISWA PROGRAM S1 </p>
            <br>
        </div>
        <div style="line-height: 3px; text-align : center; font-weight: bold; text-transform: uppercase">
            <p>FAKULTAS TEKNIK UNIMA</p>
            <br>
            <p>{{ $surat_keluar?->jurusan_prodi ? $surat_keluar->jurusan_prodi : "....." }}</p>
        </div>

        <br>

        <table class="border-collapse" width="100%">
            <tr style="text-align: center; font-weight: bold;">
                <td class="border-collapse" style="width: 5%;">NO</td>
                <td class="border-collapse" style="width: 25%;">NAMA DAN NIM</td>
                <td class="border-collapse">TIM PENGUJI</td>
                <td class="border-collapse" style="width: 30%;">JUDUL SKRIPSI</td>
            </tr>
            <tr style="vertical-align: top">
                <td class="border-collapse" style="width: 5%; vertical-align: top; text-align: center; padding: 4px;">1</td>
                <td class="border-collapse" style="width: 10%; vertical-align: top; text-align: center; padding: 2px;">
                   <span>
                        {{ $surat_keluar?->nama_mhs ? $surat_keluar->nama_mhs : "....."  }}
                   </span>
                   <br>
                   <span>
                        {{ $surat_keluar?->nim ? $surat_keluar->nim : "....." }}
                   </span>
                </td>
                <td class="border-collapse">
                   <ol style="margin-left: -10px; margin-top: 2px">
                        @if($surat_keluar?->dosen_penguji)                            
                            @foreach (json_decode($surat_keluar->dosen_penguji) as $data)    
                                <li>{{ $data }}</li>
                            @endforeach
                        @else
                            .....
                        @endif
                   </ol>
                </td>   
                <td class="border-collapse" style="vertical-align: top; padding: 4px;">
                    {{ $surat_keluar?->judul_skripsi ? $surat_keluar->judul_skripsi : "....." }}
                </td>
            </tr>
        </table>

        <br><br><br>

        <div style="width: 35%; text-align: left; float: right; font-size: 13px">
            {{-- <div>Ditetapkan di : Tondano</div>
            <div>Pada tanggal : {{ $surat_keluar?->nomor_surat && $surat_keluar?->status_selesai ? $surat_keluar->updated_at->translatedFormat('d F Y') : "....." }}</div> --}}
            <div style="font-weight: bold">
                <div>A.n. Rektor</div>
                @if($surat_keluar?->tanda_tangan === 'pd1')
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


        <div style="page-break-before: always"></div>

        {{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

        <img class="img" src="{{ $img_logo }}" alt="" width="85px">
        <div id="kop" style="text-align: center;">
            <h3>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN,</h3>
            <h3>RISET DAN TEKNOLOGI</h3>
            <h3>UNIVERSITAS NEGERI MANADO</h3>
            <h5>ALAMAT : KAMPUS UNIMA TONDANO 95618</h5>
            <p style="font-size: 13px"><b>Telp. (0431)321845, 321846, 321847 Fax: (0431) 321866<b></p>
            <hr>
        </div>

        <div style="margin-left: 20px">
            <table>
                <tr>
                    <td style="width: 80px;">Nomor</td>
                    <td style="width: 15px;">:</td>
                    <td>{{ $surat_keluar?->nomor_surat ? $surat_keluar->nomor_surat : "....." }}</td>
                </tr>
                <tr>
                    <td>Lamp.</td>
                    <td>:</td>
                    <td>Undangan Ujian Akhir Program/Komprehensif</td>
                </tr>
                <tr>
                    <td>Hal</td>
                    <td>:</td>
                    <td>
                        Undangan Ujian Akhir Program/Komprehensif
                        <br>
                        a.n, {{ $surat_keluar?->nama_mhs ? $surat_keluar->nama_mhs : "....."  }}
                    </td>
                </tr>
            </table>
            <br>
            <div>
                <p>Yth: ...........................</p>
                <p>Panitia dan Penguji Ujian Komprehensif</p>
                <p>di-</p>
                <p>Tempat.</p>
            </div>
            <br>
            <div>
                <div style="margin-left: 3px">
                    Dekan Fakultas Teknik Universitas Negeri Manado dengan ini menerangkan bahwa:
                </div>
                <br>
                <table style="margin-left: 20px">
                    <tr>
                        <td>Hari / Tanggal</td>
                        <td>:</td>
                        <td>{{ $surat_keluar?->tanggal_ujian ? $surat_keluar->tanggal_ujian->translatedFormat('d F Y') : "....." }}</td>
                    </tr>
                    <tr>
                        <td>Pukul</td>
                        <td>:</td>
                        <td>{{ $surat_keluar?->tanggal_ujian ? $surat_keluar->waktu_ujian : "....." }}</td>
                    </tr>
                    <tr>
                        <td>Tempat</td>
                        <td>:</td>
                        <td>{{ $surat_keluar?->tanggal_ujian ? $surat_keluar->tempat_ujian : "....." }}</td>
                    </tr>
                </table>
                <div>
                    <p>Demikian undangan kami, atas kehadiran Bapak dan Ibu Dosen disampaikan terima kasih.</p>
                </div>
    
                <br><br><br>
    
                <div style="width: 35%; text-align: left; float: right; font-size: 13px">
                    <div style="font-weight: bold">
                        <div>A.n. Rektor</div>
                        @if($surat_keluar?->tanda_tangan === 'pd1')
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
                    <span>Catatan:</span><br>
                    <div>1. Mohon hadir tepat waktu</div>
                    <div>2. Pakaian Pria/Wanita PSL</div>
                    <div>3. Harap tidak membawa keluarga & kerabat</div>
                    <div>4. Pelaksanaan ujian sesuai protap Covid-19</div>
                </div>
            </div>
        </div>

        <div style="page-break-before: always"></div>

        {{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

        <div style="line-height: 3px; text-align : center; font-weight: bold; text-transform: uppercase">
            <p>TANDA TERIMA UNDANGAN UJIAN KOMPREHENSIF</p>
            <p>HARI / TANGGAL : {{ $surat_keluar?->tanggal_ujian ? $surat_keluar->tanggal_ujian->translatedFormat('d F Y') : "....." }}</p>
            <br>
            <p>ATAS NAMA : {{ $surat_keluar?->nama_mhs ? $surat_keluar->nama_mhs : "....."  }}</p>
        </div>
        <br><br><br>
        <table class="border-collapse" width="100%">
            <tr style="text-align: center; font-weight: bold;">
                <td class="border-collapse" style="width: 5%;">NO</td>
                <td class="border-collapse" style="width: 35%;">NAMA</td>
                <td class="border-collapse" style="width: 25%;">TIM PENGUJI</td>
                <td class="border-collapse" style="width: 20%;">T.T.D</td>
            </tr>
            @foreach (json_decode($surat_keluar->dosen_penguji) as $key => $data)    
                <tr style="vertical-align: top">
                    <td class="border-collapse" style="width: 5%; vertical-align: top; text-align: center; padding: 4px;">{{$key+1}}.</td>
                    <td class="border-collapse" style="width: 10%; vertical-align: top; padding: 4px;">
                        {{$data}}
                    </td>
                    <td class="border-collapse" style="width: 10%; vertical-align: top; padding: 4px;">
                        @if($key+1 === 1)    
                            Ketua /Penanggung Jawab
                        @elseif($key+1 === 2)
                            Wakil Ketua
                        @else
                            Anggota
                        @endif
                    </td>
                    <td class="border-collapse" style="width: 10%; vertical-align: top; padding: 4px;">
                        @if(($key+1)%2 === 0)
                            <span style="margin-left: 70px">{{$key+1}}.</span>
                        @else
                            <span style="">{{$key+1}}.</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
        <br>
        <div style="font-weight: bold; font-style: italic; font-size: 13px">
            <div>Catatan : </div>
            <div>1. Undangan dan SK Ujian harus diterima langsung oleh yang bersangkutan/ Dosen Penguji dan Panitia Ujian</div>
            <div>2. Bukti Tanda Terima ini Diserahkan Kepada Panitia Ujian</div>
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