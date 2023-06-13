<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Daftar Surat Masuk</h1>
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
                                        <input type="text" wire:model="searchText" class="form-control form-control-md" placeholder="Cari No Surat/Pengirim">
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
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th scope="col">No Surat Masuk</th>
                                    <th scope="col">Tanggal Terima</th>
                                    <th scope="col">Tanggal Surat</th>
                                    <th scope="col">Pengirim</th>
                                    <th scope="col">Perihal Surat</th>
                                    <th scope="col">Sifat Surat</th>
                                    <th scope="col" width="170">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($daftar_surat as $data)
                                <tr>
                                    <td>{{ $data->no_surat_masuk }}</td>
                                    <td>{{ $data->tanggal_terima->translatedFormat('l, d F Y') }}</td>
                                    <td>{{ $data->tanggal_surat->translatedFormat('l, d F Y') }}</td>
                                    <td>{{ $data->pengirim }}</td>
                                    <td>{{ $data->perihal_surat }}</td>
                                    <td>{{ $data->sifat_surat }}</td>
                                    <td class="text-center">
                                        <a href="{{ asset('upload/' . $data->scan_file_surat) }}" target="blank" class="btn btn-sm btn-primary">LIHAT</a>
                                        <a href="{{ route('disposisi-kabag-pd1.index', $data->id) }}" class="btn btn-sm btn-success">DISPOSISI</a>
                                    </td>
                                </tr>
                                @endforeach
                                @if($daftar_surat->count() == 0)
                                    <tr class="text-center">
                                        <th style="font-weight: normal" colspan="7">Tidak tersedia.</th>
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