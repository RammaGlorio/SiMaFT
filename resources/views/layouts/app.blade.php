<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIMAFT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('asset/dist/css/toastr.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('asset/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <livewire:styles/>
  <livewire:scripts/>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" href="#" role="button">
          {{ Auth::user()->name }}
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('logout') }}" class="nav-link"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="ion ion-android-exit"></i> Keluar
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('asset/img/LOGO SIMAFT.png')}}"  width="235px" alt="SIMAFT" class="  " style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" 
              class="nav-link {{ request()->segment(1) == '' ? 'active' : '' }}">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          @if(Auth::user()->role == 'Admin')              
            <li class="nav-item">
              <a href="{{ route('user.index') }}" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Pengguna
                </p>
              </a>
            </li>
          @endif

          @if(Auth::user()->role == 'Umum')
            <li class="nav-item">
              <a href="{{ route('surat-masuk-umum.index') }}" 
                class="nav-link {{ request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'umum' ? 'active' : '' }}">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Surat Masuk
                </p>
              </a>
            </li>
            <li class="nav-item {{ request()->segment(1) == 'surat-keluar' && request()->segment(2) == 'umum' ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Surat Keluar
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.umum.kartu-mahasiswa.index') }}" 
                    class="nav-link {{ request()->segment(2) == 'umum' && request()->segment(3) == 'kartu-mahasiswa' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kartu Mahasiswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.umum.proposal.index') }}" 
                    class="nav-link {{ request()->segment(2) == 'umum' && request()->segment(3) == 'sk-proposal' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Proposal</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.umum.sk-ujian-hasil.index') }}" 
                    class="nav-link {{ request()->segment(2) == 'umum' && request()->segment(3) == 'sk-ujian-hasil' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Ujian Hasil</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.umum.sk-komprehensif.index') }}" 
                    class="nav-link {{ request()->segment(2) == 'umum' && request()->segment(3) == 'sk-komprehensif' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Komprehensif</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.umum.sk-pembimbing-skripsi.index') }}" 
                    class="nav-link {{ request()->segment(2) == 'umum' && request()->segment(3) == 'sk-pembimbing-skripsi' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Pembimbing Skripsi</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{ request()->segment(1) == 'arsip' ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Arsip
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('arsip.umum.surat-masuk.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'arsip' && request()->segment(3) == 'surat-masuk' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                  </a>
                </li>
                <li class="nav-item {{ request()->segment(1) == 'arsip' && request()->segment(3) == 'surat-keluar' ? 'menu-open' : '' }}">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle"></i>
                    <p>
                      Surat Keluar
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('arsip.umum.surat-keluar.kartu-mhs.index') }}" 
                        class="nav-link {{ request()->segment(1) == 'arsip' && request()->segment(2) == 'umum' && request()->segment(3) == 'surat-keluar' && request()->segment(4) == 'kartu-mahasiswa' ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Kartu Mahasiswa</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('arsip.umum.surat-keluar.sk-proposal.index') }}" 
                        class="nav-link {{ request()->segment(1) == 'arsip' && request()->segment(2) == 'umum' && request()->segment(3) == 'surat-keluar' && request()->segment(4) == 'sk-proposal' ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>SK Proposal</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('arsip.umum.surat-keluar.sk-ujian-hasil.index') }}" 
                        class="nav-link {{ request()->segment(1) == 'arsip' && request()->segment(2) == 'umum' && request()->segment(3) == 'surat-keluar' && request()->segment(4) == 'sk-ujian-hasil' ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>SK Ujian Hasil</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('arsip.umum.surat-keluar.sk-komprehensif.index') }}" 
                        class="nav-link {{ request()->segment(1) == 'arsip' && request()->segment(2) == 'umum' && request()->segment(3) == 'surat-keluar' && request()->segment(4) == 'sk-komprehensif' ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>SK Komprehensif</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('arsip.umum.surat-keluar.sk-pembimbing-skripsi.index') }}" 
                        class="nav-link {{ request()->segment(1) == 'arsip' && request()->segment(2) == 'umum' && request()->segment(3) == 'surat-keluar' && request()->segment(4) == 'sk-pembimbing-skripsi' ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>SK Pembimbing Skripsi</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          @endif

          @if(Auth::user()->role == 'Dekan')
            <li class="nav-item">
              <a href="{{ route('surat-masuk-umum-dekan.index') }}" 
                class="nav-link {{ request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'dekan' || 
                  request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'disposisi-dekan'
                  ? 'active' : '' }}">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Surat Masuk
                </p>
              </a>
            </li>
            <li class="nav-item {{ request()->segment(1) == 'surat-keluar' ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Surat Keluar
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item {{ request()->segment(1) == 'surat-keluar' && request()->segment(2) == 'pd1' ? 'menu-open' : '' }}">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle"></i>
                    <p>
                      Disposisi WD1
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('surat-keluar.pd1.dekan.sk-proposal.index') }}" 
                        class="nav-link {{ request()->segment(1) == 'surat-keluar' && request()->segment(2) == 'pd1' && (str_contains(request()->segment(3), 'dekan') && request()->segment(4) == 'sk-proposal') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>SK Proposal</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('surat-keluar.pd1.dekan.sk-ujian-hasil.index') }}" 
                        class="nav-link {{ request()->segment(1) == 'surat-keluar' && request()->segment(2) == 'pd1' && (str_contains(request()->segment(3), 'dekan') && request()->segment(4) == 'sk-ujian-hasil') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>SK Ujian Hasil</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('surat-keluar.pd1.dekan.sk-komprehensif.index') }}" 
                        class="nav-link {{ request()->segment(1) == 'surat-keluar' && request()->segment(2) == 'pd1' && (str_contains(request()->segment(3), 'dekan') && request()->segment(4) == 'sk-komprehensif') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>SK Komprehensif</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('surat-keluar.pd1.dekan.sk-pembimbing-skripsi.index') }}" 
                        class="nav-link {{ request()->segment(1) == 'surat-keluar' && request()->segment(2) == 'pd1' && (str_contains(request()->segment(3), 'dekan') && request()->segment(4) == 'sk-pembimbing-skripsi') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>SK Pembimbing Skripsi</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle"></i>
                    <p>
                      Disposisi WD2
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    {{-- <li class="nav-item">
                      <a href="{{ route('surat-keluar.pd3.dekan.kartu-mhs.index') }}" 
                        class="nav-link {{ request()->segment(1) == 'surat-keluar' && request()->segment(2) == 'pd3' && (str_contains(request()->segment(3), 'dekan')) ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Kartu Mahasiswa</p>
                      </a>
                    </li> --}}
                  </ul>
                </li>
                <li class="nav-item {{ request()->segment(1) == 'surat-keluar' && request()->segment(2) == 'pd3' ? 'menu-open' : '' }}">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle"></i>
                    <p>
                      Disposisi WD3
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('surat-keluar.pd3.dekan.kartu-mhs.index') }}" 
                        class="nav-link {{ request()->segment(1) == 'surat-keluar' && request()->segment(2) == 'pd3' && (str_contains(request()->segment(3), 'dekan') && request()->segment(4) == 'kartu-mahasiswa') ? 'active' : '' }}">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Kartu Mahasiswa</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          @endif

          @if(Auth::user()->role == 'PD1')
            <li class="nav-item">
              <a href="{{ route('surat-masuk-umum-pd1.index') }}" 
                class="nav-link {{ request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'pd1' || 
                  request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'disposisi-pd1'
                  ? 'active' : '' }}">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Surat Masuk
                </p>
              </a>
            </li>
            <li class="nav-item {{ request()->segment(1) == 'surat-keluar' ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Surat Keluar
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.pd1.sk-proposal.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'surat-keluar' && (str_contains(request()->segment(2), 'pd1')) && request()->segment(3) == 'sk-proposal' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Proposal</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.pd1.sk-ujian-hasil.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'surat-keluar' && (str_contains(request()->segment(2), 'pd1')) && request()->segment(3) == 'sk-ujian-hasil' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Ujian Hasil</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.pd1.sk-komprehensif.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'surat-keluar' && (str_contains(request()->segment(2), 'pd1')) && request()->segment(3) == 'sk-komprehensif' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Komprehensif</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.pd1.sk-pembimbing-skripsi.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'surat-keluar' && (str_contains(request()->segment(2), 'pd1')) && request()->segment(3) == 'sk-pembimbing-skripsi' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Pembimbing Skripsi</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif

          @if(Auth::user()->role == 'PD2')
            <li class="nav-item">
              <a href="#" 
                class="nav-link {{ request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'pd2' || 
                  request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'disposisi-pd2'
                  ? 'active' : '' }}">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Surat Masuk
                </p>
              </a>
            </li>
          @endif

          @if(Auth::user()->role == 'PD3')
            <li class="nav-item">
              <a href="{{ route('surat-masuk-umum-pd3.index') }}" 
                class="nav-link {{ request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'pd3' || 
                  request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'disposisi-pd3'
                  ? 'active' : '' }}">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Surat Masuk
                </p>
              </a>
            </li>
            <li class="nav-item {{ request()->segment(1) == 'surat-keluar' ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Surat Keluar
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.pd3.kartu-mhs.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'surat-keluar' && (str_contains(request()->segment(2), 'pd3')) && request()->segment(3) == 'kartu-mahasiswa' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kartu Mahasiswa</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif

          @if(Auth::user()->role == 'Kabag')
            <li class="nav-item {{ request()->segment(1) == 'surat-masuk' ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Surat Masuk
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('surat-masuk-umum-kabag-pd1.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'pd1' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Disposisi Wakil Dekan 1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" 
                    class="nav-link {{ request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'pd2' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Disposisi Wakil Dekan 2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-masuk-umum-kabag-pd3.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'pd3' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Disposisi Wakil Dekan 3</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{ request()->segment(1) == 'surat-keluar' ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Surat Keluar
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.kabag.kartu-mhs.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'surat-keluar' && (str_contains(request()->segment(2), 'kabag')) && request()->segment(3) == 'kartu-mahasiswa' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kartu Mahasiswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.kabag.sk-proposal.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'surat-keluar' && (str_contains(request()->segment(2), 'kabag')) && request()->segment(3) == 'sk-proposal' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Proposal</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.kabag.sk-ujian-hasil.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'surat-keluar' && (str_contains(request()->segment(2), 'kabag')) && request()->segment(3) == 'sk-ujian-hasil' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Ujian Hasil</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.kabag.sk-komprehensif.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'surat-keluar' && (str_contains(request()->segment(2), 'kabag')) && request()->segment(3) == 'sk-komprehensif' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Komprehensif</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.kabag.sk-pembimbing-skripsi.index') }}" 
                    class="nav-link {{ request()->segment(1) == 'surat-keluar' && (str_contains(request()->segment(2), 'kabag')) && request()->segment(3) == 'sk-pembimbing-skripsi' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Pembimbing Skripsi</p>
                  </a>
                </li>
              </ul>
            </li>
            </li>
          @endif

          @if(Auth::user()->role == 'Kemahasiswaan')
            <li class="nav-item">
              <a href="{{ route('surat-masuk-umum.kemahasiswaan.index') }}" 
                class="nav-link {{ request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'kemahasiswaan' ? 'active' : '' }}">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Surat Masuk
                </p>
              </a>
            </li>
            <li class="nav-item {{ request()->segment(1) == 'surat-keluar' && request()->segment(2) == 'kemahasiswaan' ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Surat Keluar
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.kemahasiswaan.kartu-mahasiswa.index') }}" 
                    class="nav-link {{ request()->segment(2) == 'kemahasiswaan' && request()->segment(3) == 'kartu-mahasiswa' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kartu Mahasiswa</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif

          @if(Auth::user()->role == 'Pendidikan')
            <li class="nav-item">
              <a href="{{ route('surat-masuk-umum.pendidikan.index') }}" 
                class="nav-link {{ request()->segment(1) == 'surat-masuk' && request()->segment(2) == 'pendidikan' ? 'active' : '' }}">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Surat Masuk
                </p>
              </a>
            </li>
            <li class="nav-item {{ request()->segment(1) == 'surat-keluar' && request()->segment(2) == 'pendidikan' ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Surat Keluar
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.pendidikan.sk-proposal.index') }}" 
                    class="nav-link {{ request()->segment(2) == 'pendidikan' && request()->segment(3) == 'sk-proposal' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Proposal</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.pendidikan.sk-ujian-hasil.index') }}" 
                    class="nav-link {{ request()->segment(2) == 'pendidikan' && request()->segment(3) == 'sk-ujian-hasil' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Ujian Hasil</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.pendidikan.sk-komprehensif.index') }}" 
                    class="nav-link {{ request()->segment(2) == 'pendidikan' && request()->segment(3) == 'sk-komprehensif' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Komprehensif</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('surat-keluar.pendidikan.sk-pembimbing-skripsi.index') }}" 
                    class="nav-link {{ request()->segment(2) == 'pendidikan' && request()->segment(3) == 'sk-pembimbing-skripsi' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Pembimbing Skripsi</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif

          <li class="nav-item">
            <a href="{{ route('pengaturan-pengguna') }}" class="nav-link {{ request()->segment(1) == 'pengaturan' ? 'active' : '' }}">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li>

          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    {{ $slot }}

    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php
      $year = date("Y"); 
    ?>
    <strong>Copyright &copy; {{ $year }}.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('asset/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('asset/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="{{ asset('asset/dist/js/toastr.js') }}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('asset/dist/js/adminlte.js') }}"></script>

@stack('scripts')

</body>
</html>
