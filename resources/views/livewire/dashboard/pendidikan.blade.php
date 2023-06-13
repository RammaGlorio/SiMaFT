<div>
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">                    
                    <h3>{{ $total_surat_masuk_sk_proposal+$total_surat_masuk_sk_pembimbing_skripsi+$total_surat_masuk_sk_ujian_hasil+$total_surat_masuk_sk_kompre }}</h3>

                    <p>Surat Masuk</p>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$total_surat_keluar_sk_proposal+$total_surat_keluar_sk_pembimbing_skripsi+$total_surat_keluar_sk_ujian_hasil+$total_surat_keluar_sk_kompre}}</h3>

                    <p>Surat Keluar</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>Surat Masuk</h4>
            <div class="table-responsive">
                <table class="table table-bordered" style="margin-bottom: 5px">
                    <tbody>     
                        @if($total_surat_masuk_sk_proposal <= 0 && $total_surat_masuk_sk_pembimbing_skripsi <= 0 && $total_surat_masuk_sk_ujian_hasil <= 0 && $total_surat_masuk_sk_kompre <= 0)
                            <tr>
                                <th class="text-center" style="font-weight: normal" colspan="5">Tidak tersedia.</th>
                            </tr>  
                        @else
                        
                            @if($total_surat_masuk_sk_proposal > 0)                            
                                <tr>
                                    <td width="25%">SK Proposal</td>
                                    <td>{{$total_surat_masuk_sk_proposal}}</td>
                                </tr>
                            @endif
                            @if($total_surat_masuk_sk_pembimbing_skripsi > 0)                            
                                <tr>
                                    <td width="25%">SK Pembimbing Skripsi</td>
                                    <td>{{$total_surat_masuk_sk_pembimbing_skripsi}}</td>
                                </tr>
                            @endif
                            @if($total_surat_masuk_sk_ujian_hasil > 0)                            
                                <tr>
                                    <td width="25%">SK Ujian Hasil</td>
                                    <td>{{$total_surat_masuk_sk_ujian_hasil}}</td>
                                </tr>
                            @endif
                            @if($total_surat_masuk_sk_kompre > 0)                            
                                <tr>
                                    <td width="25%">SK Komprehensif</td>
                                    <td>{{$total_surat_masuk_sk_kompre}}</td>
                                </tr>
                            @endif
                        @endif
                    </tbody>
                </table>
                <br>
            </div>
            <h4>Surat Keluar</h4>
            <div class="table-responsive">
                <table class="table table-bordered" style="margin-bottom: 5px">
                    <tbody>     
                        @if($total_surat_keluar_sk_proposal <= 0 && $total_surat_keluar_sk_pembimbing_skripsi <= 0 && $total_surat_keluar_sk_proposal <= 0 && $total_surat_keluar_sk_ujian_hasil <= 0 && $total_surat_keluar_sk_kompre <= 0)
                            <tr>
                                <th class="text-center" style="font-weight: normal" colspan="5">Tidak tersedia.</th>
                            </tr>  
                        @else
                        
                            @if($total_surat_keluar_sk_proposal > 0)                            
                                <tr>
                                    <td width="25%">SK Proposal</td>
                                    <td>{{$total_surat_keluar_sk_proposal}}</td>
                                </tr>
                            @endif
                            @if($total_surat_keluar_sk_pembimbing_skripsi > 0)                            
                                <tr>
                                    <td width="25%">SK Pembimbing Skripsi</td>
                                    <td>{{$total_surat_keluar_sk_pembimbing_skripsi}}</td>
                                </tr>
                            @endif
                            @if($total_surat_keluar_sk_ujian_hasil > 0)                            
                                <tr>
                                    <td width="25%">SK Ujian Hasil</td>
                                    <td>{{$total_surat_keluar_sk_ujian_hasil}}</td>
                                </tr>
                            @endif
                            @if($total_surat_keluar_sk_kompre > 0)                            
                                <tr>
                                    <td width="25%">SK Komprehensif</td>
                                    <td>{{$total_surat_keluar_sk_kompre}}</td>
                                </tr>
                            @endif
                        @endif
                    </tbody>
                </table>
            </div>
        </div><!-- /.card-body -->
    </div>
</div>
