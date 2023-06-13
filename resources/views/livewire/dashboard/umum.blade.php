<div>
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $total_surat_masuk }}</h3>

                    <p>Surat Masuk</p>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$total_surat_keluar}}</h3>

                    <p>Surat Keluar</p>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$total_arsip_surat_keluar_kartu_mahasiswa+$total_arsip_surat_keluar_sk_pembimbing_skripsi+$total_arsip_surat_keluar_sk_proposal+$total_arsip_surat_keluar_sk_ujian_hasil+$total_arsip_surat_keluar_sk_kompre}}</h3>

                    <p>Arsip</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            {{-- <h4>Arsip Surat</h4> --}}
            <div class="table-responsive">
                {{-- <table class="table table-bordered" style="margin-bottom: 5px">
                    <tbody>
                        <tr>
                            <td width="25%">Surat Masuk</td>
                            <td>10</td>
                        </tr>
                    </tbody>
                </table>
                <br> --}}
                <h4>Arsip Surat Keluar</h4>
                <table class="table table-bordered" style="margin-bottom: 5px">
                    <tbody>
                        <tr>
                            <td width="25%">Kartu Mahasiswa</td>
                            <td>{{$total_arsip_surat_keluar_kartu_mahasiswa}}</td>
                        </tr>
                        <tr>
                            <td>SK Proposal</td>
                            <td>{{$total_arsip_surat_keluar_sk_proposal}}</td>
                        </tr>
                        <tr>
                            <td>SK Ujian Hasil</td>
                            <td>{{$total_arsip_surat_keluar_sk_ujian_hasil}}</td>
                        </tr>
                        <tr>
                            <td>SK Pembimbing Skripsi</td>
                            <td>{{$total_arsip_surat_keluar_sk_pembimbing_skripsi}}</td>
                        </tr>
                        <tr>
                            <td>SK Komprehensif</td>
                            <td>{{$total_arsip_surat_keluar_sk_kompre}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- /.card-body -->
    </div>
</div>
