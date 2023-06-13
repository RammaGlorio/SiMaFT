<div>

    @include('part.alert-message')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Daftar Surat Masuk</h1>
            </div><!-- /.col -->
            {{-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col --> --}}
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
                                <label>No Surat Masuk</label>
                                <input type="text" wire:model="no_surat_masuk" class="form-control @error('no_surat_masuk') is-invalid @enderror" placeholder="Masukkan No Surat Masuk">
                                @error('no_surat_masuk')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
    
    
                            <div class="form-group">
                                <label>Tanggal Terima</label>
                                <input type="date" wire:model="tanggal_terima" class="form-control @error('tanggal_terima') is-invalid @enderror" placeholder="Masukkan Tanggal Terima Surat">
                                @error('tanggal_terima')
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
                                <label>Pengirim</label>
                                <input type="text" wire:model="pengirim" class="form-control @error('pengirim') is-invalid @enderror" placeholder="Masukkan Pengirim">
                                @error('pengirim')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
    
                
                            <div class="form-group">
                                <label>Perihal Surat</label>
                                <input type="text" wire:model="perihal_surat" class="form-control @error('perihal_surat') is-invalid @enderror" placeholder="Masukkan Perihal">
                                @error('perihal_surat')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label>Jenis Surat</label>
                                <select class="form-control @error('jenis_surat') is-invalid @enderror" wire:model="jenis_surat" id="exampleFormControlSelect1">
                                <option value="">Pilih-</option>
                                <option value="ket_kartu_mhs">Keterangan Kartu Mahasiswa</option>
                                <option value="sk_pembimbing_skripsi">SK Pembimbing Skripsi</option>
                                <option value="sk_proposal">SK Proposal</option>
                                <option value="sk_ujian_hasil">SK Ujian Hasil </option>
                                <option value="sk_kompre">SK Komprehensif</option>
                                </select>
                                @error('jenis_surat')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label>Sifat Surat</label>
                                <select class="form-control @error('sifat_surat') is-invalid @enderror" wire:model="sifat_surat" id="exampleFormControlSelect1">
                                <option value="">Pilih-</option>
                                <option value="Biasa">Biasa</option>
                                <option value="Segera">Segera</option>
                                <option value="Sangat Segera">Sangat Segera</option>
                                <option value="Penting">Penting</option>
                                <option value="Rahasia">Rahasia</option>
                                </select>
                                @error('sifat_surat')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label>Scan File Surat</label>
                                <input type="file" wire:model="scan_file_surat" class="form-control @error('scan_file_surat') is-invalid @enderror" placeholder="Tidak ada file yang dipilih">
                                @error('scan_file_surat')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
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
                                    <th scope="col">No Surat Masuk</th>
                                    <th scope="col">Tanggal Terima</th>
                                    <th scope="col">Tanggal Surat</th>
                                    <th scope="col">Pengirim</th>
                                    <th scope="col">Perihal Surat</th>
                                    <th scope="col">Sifat Surat</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">File Surat</th>
                                    <th scope="col" width="250">Aksi</th>
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
                                    <td>
                                        @if($data->jenis_surat === "ket_kartu_mhs")
                                            Keterangan Kartu Mahasiswa
                                        @elseif($data->jenis_surat === "sk_proposal")
                                            SK Proposal
                                        @elseif($data->jenis_surat === "sk_ujian_hasil")
                                            SK Ujian Hasil
                                        @elseif($data->jenis_surat === "sk_pembimbing_skripsi")
                                            SK Pembimbing Skripsi
                                        @elseif($data->jenis_surat === "sk_kompre")
                                            SK Komprehensif
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ asset('upload/' . $data->scan_file_surat) }}" target="blank" class="btn btn-sm btn-primary">LIHAT</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('surat-masuk-umum.edit', $data->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        <button wire:click="deleteSelectedItem('{{ $data->id }}')" class="btn btn-sm btn-danger">HAPUS</button>
                                        <button wire:click="simpanKirimSelectedItem('{{ $data->id }}')" class="btn btn-sm btn-success">SIMPAN & KIRIM</button>
                                    </td>
                                </tr>
                                @endforeach
                                @if($daftar_surat->count() == 0)
                                    <tr class="text-center">
                                        <th style="font-weight: normal" colspan="9">Tidak tersedia.</th>
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

    <!-- Modal konfirmasi data surat akan dihapus -->
    <div wire:ignore.self class="modal fade" id="confirmationModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div style="margin-top: 20px" class="modal-body text-center">
                <img src="{{ asset('asset/img/alert.png') }}" width="100px" alt="">
                <h5 style="margin-top: 15px">Surat akan dihapus?</h5>
                
            </div>
            <div style="margin-bottom: 30px" class="text-center">
                <form wire:submit.prevent="destroy('{{$selectedId}}')">
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

        ////////////////////////////////////

        window.addEventListener('openModalConfirmationDelete', event => {
            $('#confirmationModalDelete').modal('show');
        })

        window.addEventListener('closeModalConfirmationDelete', event => {
            $('#confirmationModalDelete').modal('hide');
        })

    </script>
@endpush
