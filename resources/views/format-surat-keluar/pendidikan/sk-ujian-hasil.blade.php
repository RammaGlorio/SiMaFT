<!DOCTYPE html>
<head>
    <title>SK Ujian Hasil</title>
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
            <p>PENUNJUKAN DAN PENGANGKATAN DOSEN PENGUJI UJIAN HASIL PENELITIAN (SKRIPSI)</p>
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
                        <li>Bahwa untuk membimbing dan mengarahkan dalam rangka Ujian Hasil Penelitian (Skripsi) mahasiswa Program S1, 
                            {{ $surat_keluar?->jurusan_prodi ? $surat_keluar->jurusan_prodi : "....." }} FT UNIMA, perlu menunjuk dan mengangkat Dosen Penguji Ujian Hasil Penelitian (Skripsi);</li>
                        <li>Bahwa nama yang tersebut pada lajur lampiran Surat Keputusan ini memenuhi syarat untuk diangkat selaku
                            Dosen Penguji Hasil Penelitian (Skripsi) mahasiswa yang tersebut namanya pada lajur 1 dan 2 daftar lampiran Surat Keputusan
                            ini;</li>
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
                            <div> Pada Jurusan Dan Prodi Se FakultasTeknik UNIMA;</li></div>
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
                    <div style="margin-left: 25px;">Menunjuk dan Mengangkat Dosen Penguji Proposal mahasiswa Program S1 {{ $surat_keluar?->jurusan_prodi ? $surat_keluar->jurusan_prodi : "....." }} FT
                        UNIMA sebagaimana tercantum pada lampiran Surat Keputusan ini.</div>
                </td>
            </tr>
            <tr>
                <td style="width: 14%; font-size: 14px">Kedua</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <div style="margin-left: 25px;">Menugaskan kepada Dosen Penguji Proposal bagi mahasiswa seperti tersebut pada lampiran Surat Keputusan ini
                        untuk menempuh Ujian Proposal di FT UNIMA.</div>
                </td>
            </tr>
            <tr>
                <td style="width: 14%; font-size: 14px">Ketiga</td>
                <td style="width: 1%; font-size: 14px">:</td>
                <td style="width: 84%; font-size: 11px">
                    <div style="margin-left: 25px;">Keputusan ini berlaku sejak tanggal ditetapkan dengan ketentuan apabila terdapat kekeliruan dalam penetapan ini,
                        maka akan diperbaiki sebagaimana mestinya.</div>
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

        <div style="line-height: 3px; text-align : center; font-size: 14px; font-weight: bold">
            <p>SUSUNAN PANITIA PELAKSANA UJIAN HASIL PENELITIAN (SKRIPSI)</p>
            <p style="text-transform: uppercase">{{ $surat_keluar?->jurusan_prodi ? $surat_keluar->jurusan_prodi : "....." }}</p>
            <p>FAKULTAS TEKNIK UNIMA</p>
        </div>

        <br><br>

        <table>
            <tr style="vertical-align: top">
                <td style="width: 150px;">KETUA</td>
                <td style="width: 5px;">:</td>
                <td style="">Dr. Djubir R. E. Kembuan, M.Pd</td>
            </tr>
        </table>
        <table>
            <tr style="vertical-align: top;">
                <td style="width: 150px;">WAKIL KETUA</td>
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
                <td style="width: 150px;">SEKERTARIS</td>
                <td style="width: 5px;">:</td>
                <td style="">{{ $surat_keluar?->sekertaris ? $surat_keluar->sekertaris : "....." }}</td>
            </tr>
        </table>
        <table>
            <tr style="vertical-align: top">
                <td style="width: 150px;">WAKIL SEKERTARIS</td>
                <td style="width: 5px;">:</td>
                <td style="">{{ $surat_keluar?->wakil_sekertaris ? $surat_keluar->wakil_sekertaris : "....." }}</td>
            </tr>
        </table>
        <table>
            <tr style="vertical-align: top">
                <td style="width: 150px;">SEKRETARIAT</td>
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
            <p>NAMA - NAMA DOSEN PENGUJI UJIAN HASIL PENELITIAN (SKRIPSI)</p>
            <p>A. N. {{ $surat_keluar?->nama_mhs ? $surat_keluar->nama_mhs : "....."  }}, NIM. {{ $surat_keluar?->nim ? $surat_keluar->nim : "....." }}, MAHASISWA PROGRAM S1 </p>
            <p>{{ $surat_keluar?->jurusan_prodi ? $surat_keluar->jurusan_prodi : "....." }} FT UNIMA</p>
        </div>

        <br>

        <table class="border-collapse" width="100%">
            <tr style="text-align: center; font-weight: bold;">
                <td class="border-collapse" style="width: 5%;">NO</td>
                <td class="border-collapse" style="width: 25%;">NAMA DAN NIM</td>
                <td class="border-collapse" style="width: 30%;">JUDUL SKRIPSI</td>
                <td class="border-collapse">DOSEN PENGUJI ATAU PERUMUS</td>
            </tr>
            <tr style="vertical-align: top">
                <td class="border-collapse" style="width: 5%; vertical-align: top; text-align: center; padding: 4px;">1</td>
                <td class="border-collapse" style="width: 10%; vertical-align: top; text-align: center; padding: 4px;">
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
                <td class="border-collapse">
                   <ol style="margin-left: -10px">
                        @if($surat_keluar?->dosen_penguji)                            
                            @foreach (json_decode($surat_keluar->dosen_penguji) as $data)    
                                <li>{{ $data }}</li>
                            @endforeach
                        @else
                            .....
                        @endif
                   </ol>
                </td>   
            </tr>
        </table>

        <br><br><br>

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