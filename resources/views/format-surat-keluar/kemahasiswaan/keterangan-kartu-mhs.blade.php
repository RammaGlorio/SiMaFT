<!DOCTYPE html>
<head>
    <title>Keterangan Kartu Mahasiswa</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: 650px; 
            height: auto; 
            position: absolute; 
            margin-left: 25px;
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
            right: 550px;
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
          
       .qrcode{
            position: fixed;
            left: -20;
            bottom: -20;
       }
    </style>

</head>

<body>
    <div id=halaman>
        <img class="img" src="{{ $img_logo }}" alt="" width="90px">
        <div id="kop" style="text-align: center;">
            <h3>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h3>
            <h3>UNIVERSITAS NEGERI MANADO</h3>
            <h2>FAKULTAS TEKNIK</h2>
            <h5>ALAMAT : KAMPUS UNIMA TONDANO 95618</h5>
            <p style="font-size: 13px"><b>Telp. (0431)321845, 321846, 321847 Fax: (0431) 321866<b></p>
            <hr>
        </div>

        <div style="line-height: 3px; text-align : center">
            <p>KETERANGAN KARTU MAHASISWA</p>
            <span>Nomor : 
                @if($surat_keluar?->nomor_surat !== null)
                    {{ $surat_keluar->nomor_surat }}
                @else
                    .......
                @endif
            </span>
        </div>

         <br>

        <div id="isi">
            <br>
            <div style="margin-left: 3px">
                Dekan Fakultas Teknik Universitas Negeri Manado dengan ini menerangkan bahwa:
            </div>

            <table>
                <tr>
                    <td style="width: 30%;">Nama</td>
                    <td style="width: 10%;">:</td>
                    <td style="width: 60%;">{{ $surat_keluar->nama_mhs }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">NIM</td>
                    <td style="width: 10%;">:</td>
                    <td style="width: 60%;">{{ $surat_keluar->nim }}</td>
                </tr>
                <tr>
                    <td style="width: 30%; vertical-align: top;">Jurusan / Prodi</td>
                    <td style="width: 10%; vertical-align: top;">:</td>
                    <td style="width: 60%;">{{ $surat_keluar->jurusan_prodi }}</td>
                </tr>
            </table>
            <div style="margin-left: 3px">
                <p>Adalah Mahasiswa Fakultas Teknik Universitas Negeri Manado 
                    yang sudah terdaftar pada Semester Ganjil Tahun Akademik 2021/2022. 
                    Adapun Mahasiswa yang bersangkutan sementara dalam proses penyelesaian.
                </p>

                <p>
                    Demikian surat keterangan ini dibuat untuk digunakan sebagai kelengkapan berkas Ujian Komprehensif.
                </p>
                <p>
                    Terima Kasih
                </p>
            </div>
        </div>



        @if($surat_keluar?->tanda_tangan === 'pd3')<div style="width: 50%; text-align: left; float: right;">a.n Dekan</div><br>@endif

        <div style="width: 50%; text-align: left; float: right;">
            @if($surat_keluar?->tanda_tangan === 'pd3')
                Wakil Dekan III,
            @else
                Dekan
            @endif
            <br>      
            @if($surat_keluar->tanda_tangan === 'dekan')            
                @if($img_ttd_dekan)    
                    <img style="margin-top: -10; margin-bottom: -10; margin-left: 20; z-index: -10" src="{{ $img_ttd_dekan }}" alt="" height="100px"><br>
                @else
                    <br><br><br><br>
                @endif
            @elseif($surat_keluar->tanda_tangan === 'pd3')
                @if($img_ttd_pd3)    
                    <img style="margin-top: -10; margin-bottom: -10; margin-left: 20; z-index: -10" src="{{ $img_ttd_pd3 }}" alt="" height="100px"><br>
                @else
                    <br><br><br><br>
                @endif
            @else
                <br><br><br><br>
            @endif

            @if($surat_keluar?->tanda_tangan === 'pd3')
                <u>Dr. Christine T.M. Manoppo, MAP</u><br>
                NIP. 19651118 198803 2 001
            @else                
                <u>Dr. Eddy D. R. Kembuan, M.Pd</u><br>
                NIP. 19620729 198803 1 001
            @endif
        </div>


        <br><br><br><br>
        <div>
            <span>Tembusan:</span><br>
            <span>Dekan sebagai laporan</span>
        </div>

        <div class="qrcode">
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