<div>

    @include('part.alert-message')

    <div class="content-header">
        <div class="container-fluid">
          
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 pl-3 pr-3">

                <?php 
                    $role = ['Dekan','PD1','PD2','PD3'];
                ?>

                @if(in_array($data_user?->role, $role))    
                    <div class="card">
                        <div class="card-header text-center">
                            <span><b>Pengaturan Umum</b></span>
                            <div class="card-tools">
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form wire:submit.prevent="simpan_ttd()" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="tanda_tangan">TTD Dosen</label>
                                    <input wire:model="tanda_tangan" type="file" id="tanda_tangan" class="form-control">
                                    <small class="form-text text-muted">Format File : JPG.
                                        {{-- @if($tanda_tangan)
                                            <i class="ion ion-checkmark float-right text-success"></i>
                                        @endif --}}
                                    </small>
                                    @error('tanda_tangan')
                                    <span style="color: red; font-size: 13px">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                @if($data_user?->tanda_tangan)                                          
                                    <hr>
                                        <div class="mb-3">
                                            <img style="border: 1px solid black" src="{{ asset('upload/' . $data_user->tanda_tangan ) }}" height="100px" alt="">
                                        </div>
                                    <hr>
                                @endif

                                <div class="">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif


                    <div class="card">
                        <div class="card-header text-center">
                            <span><b>Pengaturan Akun</b></span>
                            <div class="card-tools">
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form wire:submit.prevent="simpan_akun()">
                                <div class="form-group">
                                    <label>Email <span style="color: red">*</span></label>
                                    <input type="email" wire:model="email" class="form-control" placeholder="Email">
                                    @error('email')
                                        <span style="color: red; font-size: 13px">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" wire:model="password" class="form-control" placeholder="Password">
                                    @error('password')
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
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>

@push('scripts')
    <script>
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true,
                "timeOut"     : 10000,
            }
            toastr.success("{{ session('message') }}");
        @endif
    </script>
@endpush
