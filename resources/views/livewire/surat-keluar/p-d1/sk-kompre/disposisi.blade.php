<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Disposisi Wakil Dekan 1</h1>
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
                        <label>Informasi Surat Masuk</label>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th width="25%" style="font-weight: normal">Mahasiswa</th>
                                        <th style="font-weight: normal">{{ $data_surat->nama_mhs }}</th>
                                    </tr>
                                    <tr>
                                        <th width="25%" style="font-weight: normal">NIM</th>
                                        <th style="font-weight: normal">{{ $data_surat->nim }}</th>
                                    </tr>
                                    <tr>
                                        <th width="25%" style="font-weight: normal">Jurusan/Prodi</th>
                                        <th style="font-weight: normal">{{ $data_surat->jurusan_prodi }}</th>
                                    </tr>
                                    <tr>
                                        <th width="25%" style="font-weight: normal">Jenis Surat</th>
                                        <th style="font-weight: normal">
                                            SK Komprehensif
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 

                <div class="callout callout-info">
                    <div class="d-flex justify-content-between">
                        <h5><i class="fas fa-info"></i> Catatan Koordinator Administrasi</h5>
                        <span>{{ $data_disposisi?->created_at->translatedFormat('l, d F Y') }}</span>
                    </div>
                    {{ $data_disposisi?->catatan }}
                </div>

                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent="kirim">
            
                            <div class="form-group">
                                <label>Tujuan <span style="color: red">*</span></label>

                                <select wire:model="tujuan" id="" class="form-control w-auto">
                                    <option value="">Pilih</option>
                                    <option value="dekan">Teruskan pada Dekan</option>
                                    <option value="tanda_tangan">Tanda Tangan</option>
                                </select>

                            </div>

                            @if($tujuan === 'dekan')                                
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <textarea type="date" wire:model="catatan" class="form-control"></textarea>
                                </div>
                            @endif

            
                            <button type="submit" id="submit" hidden ></button>

                        </form>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#disposisiPd3Modal"
                            @if(!$tujuan)
                                disabled
                            @endif
                        >Kirim</button>
                    </div>
                </div>
    
            </section>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="disposisiPd3Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Disposisi Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if($tujuan === 'dekan')
                    Akan diteruskan pada Dekan?
                @elseif($tujuan === 'tanda_tangan')
                    Akan ditanda tangan?
                @endif
                <small class="form-text text-muted mt-3">
                    <span style="color: orange">Setelah dikirim, tujuan tidak dapat diubah.</span>
                </small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <button id="modal-click" type="button" class="btn btn-primary">Ya</button>
              </div>
          </div>
        </div>
    </div>

</div>

@push('scripts')
    <script>
        $(document).ready(function() {
        $("#modal-click").click(function() {
            $("#submit").click();
        });
        });
    </script>
@endpush



