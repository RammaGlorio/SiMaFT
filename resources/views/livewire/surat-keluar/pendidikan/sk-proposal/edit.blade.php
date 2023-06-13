<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Ubah Data</h1>
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
                        <form wire:submit.prevent="update">
    
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
                                <label>Sekertaris</label>
                                <input type="text" wire:model="sekertaris" class="form-control @error('sekertaris') is-invalid @enderror" placeholder="Masukkan Sekertaris">
                                @error('sekertaris')
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
                                    <input type="text" wire:model="nama_dosen" class="form-control @error('daftar_dosen_penguji') is-invalid @enderror" placeholder="Masuk Nama Dosen">
                                    @error('daftar_dosen_penguji')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <?php
                                    $no = 1;
                                ?>
                                @if(sizeof($daftar_dosen_penguji) > 0)                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" style="width:500px">
                                            <tbody>
                                                @foreach ($daftar_dosen_penguji as $key => $data)
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

                            <button type="submit" class="btn btn-primary">UPDATE DATA</button>
                        </form>
                    </div>
                </div>
    
            </section>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>