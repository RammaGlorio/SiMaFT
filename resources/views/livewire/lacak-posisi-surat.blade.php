<div>
    @include('part.alert-message')
    <div class="row" style="margin-top: 200px; max-width: 500px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="login-box-msg">Lacak Surat</h3>
                    <form wire:submit.prevent="lacakSurat">
                        <div class="input-group mb-3">
                            <input type="text" placeholder="Masukan Nomor Surat" class="form-control @error('no_surat') is-invalid @enderror" wire:model="no_surat" value="{{ old('no_surat') }}" required autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">
                            Cari
                        </button>
                    </form>
                    <!-- /.social-auth-links -->
                </div>
            <!-- /.login-card-body -->
            </div>
    
            @if (session()->has('message'))
                <div class="d-flex justify-content-center" style="background-color: rgb(223, 223, 223); border-radius: 4px; padding: 2px">
                    <span>Tidak ditemukan.</span>
                </div>
            @endif

            @if($suratMasukUmum)
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="timeline">
                                    <div class="time-label">
                                        <span class="bg-gray">Surat Masuk Diproses</span>
                                    </div>
                                    
                                    <?php
                                        $temp = $lacakSuratMasuk->count() - 1;
                                        $lastData = $lacakSuratMasuk[$temp];
                                    ?>

                                    @foreach ($lacakSuratMasuk as $data)                                                
                                        <div class="timeline-width">
                                            @if(
                                                ($data->posisi === $lastData->posisi) &&    // check posisi jika sama dengan posisi data terakhir
                                                (($loop->first || $loop->last)) &&          // check jika berada pada data pertama/terakhir
                                                $lacakSuratKeluar->count() === 0            // check jika lacakSuratKeluar = 0 (berarti surat keluar belum di proses)
                                            )
                                                <i class="fas fa-pencil-alt bg-yellow"></i>
                                            @else    
                                                <i class="fas fa-check bg-green"></i>
                                            @endif
                                            <div class="timeline-item">
                                                <span class="time">{{ $data->created_at->translatedFormat('d/m/Y') }}</span>
                                                <h3 class="timeline-header no-border" style="font-weight: bold;">
                                                    @if($data->posisi === "umum")
                                                        Umum
                                                    @elseif($data->posisi === "dekan")
                                                        Dekan
                                                    @elseif($data->posisi === "pd1")
                                                        Wakil Dekan 1
                                                    @elseif($data->posisi === "pd2")
                                                        Wakil Dekan 2
                                                    @elseif($data->posisi === "pd3")
                                                        Wakil Dekan 3
                                                    @elseif($data->posisi === "kabag")
                                                        Koordinator Administrasi
                                                    @elseif($data->posisi === "kemahasiswaan")
                                                        Kemahasiswaan
                                                    @elseif($data->posisi === "pendidikan")
                                                        Pendidikan
                                                    @endif
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach

                                @if($lacakSuratKeluar->count() > 0)
                                    <div class="time-label">
                                        <span class="bg-gray">Surat Keluar Diproses</span>
                                    </div>
                                    <?php
                                        $temp = $lacakSuratKeluar->count() - 1;
                                        $lastData = $temp >= 0 ? $lacakSuratKeluar[$temp] : null;
                                    ?>

                                    @foreach ($lacakSuratKeluar as $data)                                                
                                        <div>
                                            @if(
                                                ($data->posisi === $lastData->posisi) &&                    // check posisi jika sama dengan posisi data terakhir
                                                ($loop->first || !in_array($data->posisi, array("umum")))   // check jika berada pada data pertama / jika posisi tidak sama dengan umum
                                            )
                                                <i class="fas fa-pencil-alt bg-yellow"></i>
                                            @else    
                                                <i class="fas fa-check bg-green"></i>
                                            @endif
                                            <div class="timeline-item">
                                                <span class="time">{{ $data->created_at->translatedFormat('d/m/Y') }}</span>
                                                <h3 class="timeline-header no-border" style="font-weight: bold">
                                                    @if($data->posisi === "umum")
                                                        Umum
                                                    @elseif($data->posisi === "dekan")
                                                        Dekan
                                                    @elseif($data->posisi === "pd1")
                                                        Wakil Dekan 1
                                                    @elseif($data->posisi === "pd2")
                                                        Wakil Dekan 2
                                                    @elseif($data->posisi === "pd3")
                                                        Wakil Dekan 3
                                                    @elseif($data->posisi === "kabag")
                                                        Koordinator Administrasi
                                                    @elseif($data->posisi === "kemahasiswaan")
                                                        Kemahasiswaan
                                                    @elseif($data->posisi === "pendidikan")
                                                        Pendidikan
                                                    @endif
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        </div>
    </div>
</div>