<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Ubah Data</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
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