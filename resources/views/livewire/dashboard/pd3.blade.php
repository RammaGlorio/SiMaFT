<div>
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <?php $count=0 ?>
    
                    @foreach ($total_surat_masuk as $item)
                        <?php $count += $item->total ?>
                    @endforeach
                    
                    <h3>{{ $count }}</h3>

                    <p>Surat Masuk</p>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$total_surat_keluar_kartu_mahasiswa}}</h3>

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
                        @foreach ($total_surat_masuk as $item)                            
                            <tr>
                                <td width="25%">
                                    @if($item->jenis_surat === 'ket_kartu_mhs')
                                        Keterangan Kartu Mahasiswa
                                    @endif
                                </td>
                                <td>{{$item->total}}</td>
                            </tr>
                        @endforeach
                        @if($total_surat_masuk->count() == 0)
                            <tr>
                                <th class="text-center" style="font-weight: normal" colspan="5">Tidak tersedia.</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <br>
            </div>
            <h4>Surat Keluar</h4>
            <div class="table-responsive">
                <table class="table table-bordered" style="margin-bottom: 5px">
                    <tbody>     
                        @if($total_surat_keluar_kartu_mahasiswa <= 0)
                            <tr>
                                <th class="text-center" style="font-weight: normal" colspan="5">Tidak tersedia.</th>
                            </tr>  
                        @else
                            @if($total_surat_keluar_kartu_mahasiswa > 0)                            
                                <tr>
                                    <td width="25%">Keterangan Kartu Mahasiswa</td>
                                    <td>{{$total_surat_keluar_kartu_mahasiswa}}</td>
                                </tr>
                            @endif
                        @endif
                    </tbody>
                </table>
            </div>
        </div><!-- /.card-body -->
    </div>
</div>
