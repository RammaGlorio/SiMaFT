<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Daftar Surat Keluar</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 pl-3 pr-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">                            
                                <div class="float-right ml-auto mr-2 mb-1">
                                    <form wire:submit.prevent="submitSearch" method="POST">
                                        <div class="input-group">
                                            <input type="text" wire:model="searchText" class="form-control form-control-md" placeholder="Cari Nama/NIM/Jurusan">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-md btn-default">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Nomor Surat</th>
                                        <th scope="col">Nama Mahasiswa</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Jurusan/Prodi</th>
                                        <th scope="col">Status</th>
                                        <th width="75px" scope="col">Surat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($daftar_surat as $data)
                                    <tr>
                                        <td>
                                            @if(!$data->nomor_surat)    
                                                <span class="badge badge-warning">Tidak tersedia</span>
                                            @else
                                                {{ $data->nomor_surat }}
                                            @endif
                                        </td>
                                        <td>{{ $data->nama_mhs }}</td>
                                        <td>{{ $data->nim }}</td>
                                        <td>{{ $data->jurusan_prodi }}</td>
                                        <td>{{ $data->status_selesai === "selesai" ? "Diterima" : "..." }}</td>
                                        <td>
                                            <a target="_blank" href="{{ route('sk-pembimbing-skripsi', $data->id) }}" class="btn btn-sm btn-primary">LIHAT</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @if($daftar_surat->count() == 0)
                                        <tr class="text-center">
                                            <th style="font-weight: normal" colspan="5">Tidak tersedia.</th>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <div style="margin-top: 10px; margin-bottom: -15px">
                                {{ $daftar_surat->links() }}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>

