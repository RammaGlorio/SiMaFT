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
            <section class="col-lg-12">
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
                                    <th scope="col">Nama Mahasiswa</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Jurusan/Prodi</th>
                                    <th width="75px" scope="col">Surat</th>
                                    <th width="100px" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($daftar_surat as $data)
                                <tr>
                                    <td>{{ $data->nama_mhs }}</td>
                                    <td>{{ $data->nim }}</td>
                                    <td>{{ $data->jurusan_prodi }}</td>
                                    <td>
                                        <a target="_blank" href="{{ route('sk-proposal', $data->id) }}" class="btn btn-sm btn-primary">LIHAT</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('surat-keluar.pd1.dekan.disposisi.sk-proposal', $data->id) }}" class="btn btn-sm btn-success">DISPOSISI</a>
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

@include('part.alert-message-js')