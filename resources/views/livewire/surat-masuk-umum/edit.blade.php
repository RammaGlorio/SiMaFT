<div>
    @include('part.alert-message')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Ubah Data</h1>
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
                        <form wire:submit.prevent="update">
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
                                <label>Sifat Surat</label>
                                <select class="form-control" wire:model="sifat_surat" id="exampleFormControlSelect1">
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

@include('part.alert-message-js')