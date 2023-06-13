<div>

    @include('part.alert-message')


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
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">Nomor Surat</th>
                                        <th scope="col">Nama Mahasiswa</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Jurusan/Prodi</th>
                                        <th width="75px" scope="col">Surat</th>
                                        <th width="200px" scope="col">Aksi</th>
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
                                        <td>
                                            <a target="_blank" href="{{ route('sk-pembimbing-skripsi', $data->id) }}" class="btn btn-sm btn-primary">LIHAT</a>
                                        </td>
                                        <td>
                                            <button wire:click="nomorSuratSelectedItem('{{ $data->id }}')" class="btn btn-sm btn-primary">NO SURAT</button>
                                            <button wire:click="suratDiterimaSelectedItem('{{ $data->id }}')" class="btn btn-sm btn-primary"
                                                @if(!$data->nomor_surat)
                                                    disabled
                                                @endif
                                            >
                                                DITERIMA
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @if($daftar_surat->count() == 0)
                                        <tr class="text-center">
                                            <th style="font-weight: normal" colspan="6">Tidak tersedia.</th>
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

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="modalNomorSurat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Simpan Nomor Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form wire:submit.prevent="simpan_no_surat()">
                    <div class="form-group">
                        <input type="text" wire:model="no_surat" class="form-control" placeholder="...">
                        @error('no_surat')
                            <span style="color: red; font-size: 13px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
          </div>
        </div>
    </div>

    <!-- Modal konfirmasi surat telah diterima mahasiswa  --> 
    <div wire:ignore.self class="modal fade" id="confirmationModalSuratDiterima" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div style="margin-top: 20px" class="modal-body text-center">
                <img src="{{ asset('asset/img/alert.png') }}" width="100px" alt="">
                <h5 style="margin-top: 15px">Surat telah diterima mahasiswa?</h5>
                
            </div>
            <div style="margin-bottom: 30px" class="text-center">
                <form wire:submit.prevent="konfirmasi_surat_diterima()">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </form>
            </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')
    <script>
        window.addEventListener('openModalNomorSurat', event => {
            $('#modalNomorSurat').modal('show');
        })

        window.addEventListener('closeModalNomorSurat', event => {
            $('#modalNomorSurat').modal('hide');
        })

        ////////////////////////


        window.addEventListener('openModalSuratDiterima', event => {
            $('#confirmationModalSuratDiterima').modal('show');
        })

        window.addEventListener('closeModalNomorSurat', event => {
            $('#confirmationModalSuratDiterima').modal('hide');
        })

    </script>
@endpush

