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
                        <form wire:submit.prevent="store">
    
                            <div class="form-group">
                                <label>Surat Masuk</label>
                                <select class="form-control @error('id_surat') is-invalid @enderror" wire:model="id_surat" id="exampleFormControlSelect1">
                                <option value="">Pilih-</option>
                                @foreach ($data_surat_masuk as $data)
                                    <option value={{$data->id}}>{{ $data->perihal_surat }}</option>
                                @endforeach
                                </select>
                                @error('id_surat')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label>Nama Mahasiswa</label>
                                <input type="text" wire:model="nama_mhs" class="form-control @error('nama_mhs') is-invalid @enderror" placeholder="Masukkan Nama">
                                @error('nama_mhs')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
    
                    
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" wire:model="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="Masukkan NIM">
                                @error('nim')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
    
                
                            <div class="form-group">
                                <label>Jurusan/Prodi</label>
                                <input type="text" wire:model="jurusan_prodi" class="form-control @error('jurusan_prodi') is-invalid @enderror" placeholder="Masukkan Jurusan/Prodi">
                                @error('jurusan_prodi')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Memperhatikan</label>
                                <input type="text" wire:model="memperhatikan" class="form-control @error('memperhatikan') is-invalid @enderror" placeholder="Masukkan Keterangan">
                                @error('memperhatikan')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tanggal Surat</label>
                                <input type="date" wire:model="tanggal_surat" class="form-control @error('tanggal_surat') is-invalid @enderror" placeholder="Masukkan Tanggal Surat">
                                @error('tanggal_surat')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Judul Skripsi</label>
                                <input type="text" wire:model="judul_skripsi" class="form-control @error('judul_skripsi') is-invalid @enderror" placeholder="Masukkan Judul Skripsi">
                                @error('judul_skripsi')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Dosen Penguji</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <button wire:click="tambahDosen()" type="button" class="btn btn-primary"><i class="fas fa-plus"></i></button>
                                    </div>
                                    <input type="text" wire:model="nama_dosen" class="form-control @error('daftar_dosen_pembimbing') is-invalid @enderror" placeholder="Masuk Nama Dosen">
                                    @error('daftar_dosen_pembimbing')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <?php
                                    $no = 1;
                                ?>
                                @if(sizeof($daftar_dosen_pembimbing) > 0)                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" style="width:500px">
                                            <tbody>
                                                @foreach ($daftar_dosen_pembimbing as $key => $data)
                                                    <tr>
                                                        <th width="5%" style="font-weight: normal">{{$key + 1}}</th>
                                                        <th style="font-weight: normal">{{ $data }}</th>
                                                        <th width="5%" style="font-weight: normal"><i wire:click="hapusDosen({{$key}})" class="fas fa-times"></i></th>
                                                    </tr>
                                                    <?php $no++; ?>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif

                            </div>
    
                        </form>
                        <button wire:click="openModalConfirmation()" class="btn btn-primary">PROSES SURAT</button>
                    </div>
                </div>
    
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
                                    <td>{{ $data->nama_mhs }}</td>
                                    <td>{{ $data->nim }}</td>
                                    <td>{{ $data->jurusan_prodi }}</td>
                                    <td>
                                        <a target="_blank" href="{{ route('sk-pembimbing-skripsi', $data->id) }}" class="btn btn-sm btn-primary">LIHAT</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('surat-keluar.pendidikan.sk-pembimbing-skripsi.edit', $data->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        <button wire:click="simpanKirimSelectedItem('{{ $data->id }}')" class="btn btn-sm btn-success">SIMPAN & KIRIM</button>
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

    <!-- Modal konfirmasi surat baru akan diproses  --> 
    <div wire:ignore.self class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div style="margin-top: 20px" class="modal-body text-center">
                <img src="{{ asset('asset/img/alert.png') }}" width="100px" alt="">
                <h5 style="margin-top: 15px">Surat akan diproses?</h5>
                
            </div>
            <div style="margin-bottom: 30px" class="text-center">
                <form wire:submit.prevent="store()">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal konfirmasi surat akan disimpan & dikirim -->
    <div wire:ignore.self class="modal fade" id="confirmationModalSimpanKirim" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div style="margin-top: 20px" class="modal-body text-center">
                <img src="{{ asset('asset/img/alert.png') }}" width="100px" alt="">
                <h5 style="margin-top: 15px">Surat akan diteruskan?</h5>
                
            </div>
            <div style="margin-bottom: 30px" class="text-center">
                <form wire:submit.prevent="simpan_kirim('{{$selectedId}}')">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </form>
            </div>
            </div>
        </div>
    </div>

</div>

@include('part.alert-message-js')

@push('scripts')
    <script>
        window.addEventListener('openModalConfirmation', event => {
            $('#confirmationModal').modal('show');
        })

        window.addEventListener('closeModalConfirmation', event => {
            $('#confirmationModal').modal('hide');
        })

        ////////////////////////////////////

        window.addEventListener('openModalConfirmationSimpanKirim', event => {
            $('#confirmationModalSimpanKirim').modal('show');
        })

        window.addEventListener('closeModalConfirmationSimpanKirim', event => {
            $('#confirmationModalSimpanKirim').modal('hide');
        })

    </script>
@endpush