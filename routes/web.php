<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\Http\Livewire\Dashboard\Index::class)->name('dashboard')->middleware('auth');

Route::group(['middleware' => ['auth', 'auth_admin']], function(){
    Route::get('/user', App\Http\Livewire\User\Index::class)->name('user.index');
    Route::get('/user/create',  App\Http\Livewire\User\Create::class)->name('user-create');
    Route::get('/user/edit/{id}',  App\Http\Livewire\User\Edit::class)->name('user.edit');
});

Route::group(['middleware' => ['auth', 'auth_umum']], function(){
    Route::get('/surat-masuk/umum/', App\Http\Livewire\SuratMasukUmum\Index::class)->name('surat-masuk-umum.index');
    Route::get('/surat-masuk/umum/edit/{id}',  App\Http\Livewire\SuratMasukUmum\Edit::class)->name('surat-masuk-umum.edit');

    Route::get('/surat-keluar/umum/kartu-mahasiswa', App\Http\Livewire\SuratKeluar\Umum\KartuMahasiswa\Index::class)->name('surat-keluar.umum.kartu-mahasiswa.index');
    Route::get('/surat-keluar/umum/sk-proposal', App\Http\Livewire\SuratKeluar\Umum\SkProposal\Index::class)->name('surat-keluar.umum.proposal.index');
    Route::get('/surat-keluar/umum/sk-ujian-hasil', App\Http\Livewire\SuratKeluar\Umum\SkUjianHasil\Index::class)->name('surat-keluar.umum.sk-ujian-hasil.index');
    Route::get('/surat-keluar/umum/sk-pembimbing-skripsi', App\Http\Livewire\SuratKeluar\Umum\SkPembimbingSkripsi\Index::class)->name('surat-keluar.umum.sk-pembimbing-skripsi.index');
    Route::get('/surat-keluar/umum/sk-komprehensif', App\Http\Livewire\SuratKeluar\Umum\SkKompre\Index::class)->name('surat-keluar.umum.sk-komprehensif.index');

    Route::get('/arsip/umum/surat-masuk/', App\Http\Livewire\Arsip\SuratMasuk\Index::class)->name('arsip.umum.surat-masuk.index');

    Route::get('/arsip/umum/surat-keluar/kartu-mahasiswa/', App\Http\Livewire\Arsip\SuratKeluar\KartuMahasiswa\Index::class)->name('arsip.umum.surat-keluar.kartu-mhs.index');
    Route::get('/arsip/umum/surat-keluar/sk-proposal/', App\Http\Livewire\Arsip\SuratKeluar\SkProposal\Index::class)->name('arsip.umum.surat-keluar.sk-proposal.index');
    Route::get('/arsip/umum/surat-keluar/sk-ujian-hasil/', App\Http\Livewire\Arsip\SuratKeluar\SkUjianHasil\Index::class)->name('arsip.umum.surat-keluar.sk-ujian-hasil.index');
    Route::get('/arsip/umum/surat-keluar/sk-komprehensif/', App\Http\Livewire\Arsip\SuratKeluar\SkKompre\Index::class)->name('arsip.umum.surat-keluar.sk-komprehensif.index');
    Route::get('/arsip/umum/surat-keluar/sk-pembimbing-skripsi/', App\Http\Livewire\Arsip\SuratKeluar\SkPembimbingSkripsi\Index::class)->name('arsip.umum.surat-keluar.sk-pembimbing-skripsi.index');
});

Route::group(['middleware' => ['auth', 'auth_dekan']], function(){
    Route::get('/surat-masuk/dekan/', App\Http\Livewire\SuratMasukUmum\Dekan\Index::class)->name('surat-masuk-umum-dekan.index');
    Route::get('/surat-masuk/disposisi-dekan/{id}', App\Http\Livewire\SuratMasukUmum\Dekan\Disposisi::class)->name('disposisi-dekan.index');

    Route::get('/surat-keluar/pd2/dekan', App\Http\Livewire\SuratKeluar\Dekan\PD2\Index::class)->name('surat-keluar.pd2.dekan.index');
    Route::get('/surat-keluar/pd2/disposisi-dekan/{id}', App\Http\Livewire\SuratKeluar\Dekan\PD2\Disposisi::class)->name('surat-keluar.pd2.dekan.disposisi');

    ////////////////////////////////

    Route::get('/surat-keluar/pd1/dekan/sk-proposal', App\Http\Livewire\SuratKeluar\Dekan\PD1\SkProposal\Index::class)->name('surat-keluar.pd1.dekan.sk-proposal.index');
    Route::get('/surat-keluar/pd1/disposisi-dekan/sk-proposal/{id}', App\Http\Livewire\SuratKeluar\Dekan\PD1\SkProposal\Disposisi::class)->name('surat-keluar.pd1.dekan.disposisi.sk-proposal'); 
    
    Route::get('/surat-keluar/pd1/dekan/sk-ujian-hasil', App\Http\Livewire\SuratKeluar\Dekan\PD1\SkUjianHasil\Index::class)->name('surat-keluar.pd1.dekan.sk-ujian-hasil.index');
    Route::get('/surat-keluar/pd1/disposisi-dekan/sk-ujian-hasil/{id}', App\Http\Livewire\SuratKeluar\Dekan\PD1\SkUjianHasil\Disposisi::class)->name('surat-keluar.pd1.dekan.disposisi.sk-ujian-hasil'); 

    Route::get('/surat-keluar/pd1/dekan/sk-komprehensif', App\Http\Livewire\SuratKeluar\Dekan\PD1\SkKompre\Index::class)->name('surat-keluar.pd1.dekan.sk-komprehensif.index');
    Route::get('/surat-keluar/pd1/disposisi-dekan/sk-komprehensif/{id}', App\Http\Livewire\SuratKeluar\Dekan\PD1\SkKompre\Disposisi::class)->name('surat-keluar.pd1.dekan.disposisi.sk-komprehensif'); 

    Route::get('/surat-keluar/pd1/dekan/sk-pembimbing-skripsi', App\Http\Livewire\SuratKeluar\Dekan\PD1\SkPembimbingSkripsi\Index::class)->name('surat-keluar.pd1.dekan.sk-pembimbing-skripsi.index');
    Route::get('/surat-keluar/pd1/disposisi-dekan/sk-pembimbing-skripsi/{id}', App\Http\Livewire\SuratKeluar\Dekan\PD1\SkPembimbingSkripsi\Disposisi::class)->name('surat-keluar.pd1.dekan.disposisi.sk-pembimbing-skripsi'); 

    Route::get('/surat-keluar/pd3/dekan/kartu-mahasiswa', App\Http\Livewire\SuratKeluar\Dekan\PD3\KartuMahasiswa\Index::class)->name('surat-keluar.pd3.dekan.kartu-mhs.index');
    Route::get('/surat-keluar/pd3/disposisi-dekan/kartu-mahasiswa/{id}', App\Http\Livewire\SuratKeluar\Dekan\PD3\KartuMahasiswa\Disposisi::class)->name('surat-keluar.pd3.dekan.disposisi.kartu-mhs');
});

Route::group(['middleware' => ['auth', 'auth_pd1']], function(){
    Route::get('/surat-masuk/pd1/', App\Http\Livewire\SuratMasukUmum\Pd1\Index::class)->name('surat-masuk-umum-pd1.index');
    Route::get('/surat-masuk/disposisi-pd1/{id}', App\Http\Livewire\SuratMasukUmum\Pd1\Disposisi::class)->name('disposisi-pd1.index');

    Route::get('/surat-keluar/pd1/sk-proposal', App\Http\Livewire\SuratKeluar\PD1\SkProposal\Index::class)->name('surat-keluar.pd1.sk-proposal.index');
    Route::get('/surat-keluar/disposisi-pd1/sk-proposal/{id}', App\Http\Livewire\SuratKeluar\PD1\SkProposal\Disposisi::class)->name('surat-keluar.pd1.disposisi.sk-proposal');

    Route::get('/surat-keluar/pd1/sk-ujian-hasil', App\Http\Livewire\SuratKeluar\PD1\SkUjianHasil\Index::class)->name('surat-keluar.pd1.sk-ujian-hasil.index');
    Route::get('/surat-keluar/disposisi-pd1/sk-ujian-hasil/{id}', App\Http\Livewire\SuratKeluar\PD1\SkUjianHasil\Disposisi::class)->name('surat-keluar.pd1.disposisi.sk-ujian-hasil');

    Route::get('/surat-keluar/pd1/sk-komprehensif', App\Http\Livewire\SuratKeluar\PD1\SkKompre\Index::class)->name('surat-keluar.pd1.sk-komprehensif.index');
    Route::get('/surat-keluar/disposisi-pd1/sk-komprehensif/{id}', App\Http\Livewire\SuratKeluar\PD1\SkKompre\Disposisi::class)->name('surat-keluar.pd1.disposisi.sk-komprehensif');

    Route::get('/surat-keluar/pd1/sk-pembimbing-skripsi', App\Http\Livewire\SuratKeluar\PD1\SkPembimbingSkripsi\Index::class)->name('surat-keluar.pd1.sk-pembimbing-skripsi.index');
    Route::get('/surat-keluar/disposisi-pd1/sk-pembimbing-skripsi/{id}', App\Http\Livewire\SuratKeluar\PD1\SkPembimbingSkripsi\Disposisi::class)->name('surat-keluar.pd1.disposisi.sk-pembimbing-skripsi');
});

Route::group(['middleware' => ['auth', 'auth_pd2']], function(){
    // Route::get('/surat-masuk/pd2/', App\Http\Livewire\SuratMasukUmum\IndexPdDua::class)->name('surat-masuk-umum-pd2.index');
    // Route::get('/surat-masuk/disposisi-pd2/{id}', App\Http\Livewire\SuratMasukUmum\PdDuaDisposisi::class)->name('disposisi-pd2.index');
});

Route::group(['middleware' => ['auth', 'auth_pd3']], function(){
    Route::get('/surat-masuk/pd3/', App\Http\Livewire\SuratMasukUmum\Pd3\Index::class)->name('surat-masuk-umum-pd3.index');
    Route::get('/surat-masuk/disposisi-pd3/{id}', App\Http\Livewire\SuratMasukUmum\Pd3\Disposisi::class)->name('disposisi-pd3.index');

    Route::get('/surat-keluar/pd3/kartu-mahasiswa', App\Http\Livewire\SuratKeluar\PD3\KartuMahasiswa\Index::class)->name('surat-keluar.pd3.kartu-mhs.index');
    Route::get('/surat-keluar/disposisi-pd3/kartu-mahasiswa/{id}', App\Http\Livewire\SuratKeluar\PD3\KartuMahasiswa\Disposisi::class)->name('surat-keluar.pd3.disposisi.kartu-mhs');
});

Route::group(['middleware' => ['auth', 'auth_kabag']], function(){
    Route::get('/surat-masuk/pd1/kabag', App\Http\Livewire\SuratMasukUmum\Kabag\Pd1Index::class)->name('surat-masuk-umum-kabag-pd1.index');
    Route::get('/surat-masuk/pd1/disposisi-kabag/{id}', App\Http\Livewire\SuratMasukUmum\Kabag\Pd1Disposisi::class)->name('disposisi-kabag-pd1.index');

    Route::get('/surat-masuk/pd2/kabag', App\Http\Livewire\SuratMasukUmum\Kabag\Pd2Index::class)->name('surat-masuk-umum-kabag-pd2.index');
    Route::get('/surat-masuk/pd2/disposisi-kabag/{id}', App\Http\Livewire\SuratMasukUmum\Kabag\Pd2Disposisi::class)->name('disposisi-kabag-pd2.index');

    Route::get('/surat-masuk/pd3/kabag', App\Http\Livewire\SuratMasukUmum\Kabag\Pd3Index::class)->name('surat-masuk-umum-kabag-pd3.index');
    Route::get('/surat-masuk/pd3/disposisi-kabag/{id}', App\Http\Livewire\SuratMasukUmum\Kabag\Pd3Disposisi::class)->name('disposisi-kabag-pd3.index');

    Route::get('/surat-keluar/kabag/kartu-mahasiswa', App\Http\Livewire\SuratKeluar\Kabag\KartuMahasiswa\Index::class)->name('surat-keluar.kabag.kartu-mhs.index');
    Route::get('/surat-keluar/disposisi-kabag/kartu-mahasiswa/{id}', App\Http\Livewire\SuratKeluar\Kabag\KartuMahasiswa\Disposisi::class)->name('surat-keluar.kabag.disposisi.kartu-mhs');

    Route::get('/surat-keluar/kabag/sk-proposal', App\Http\Livewire\SuratKeluar\Kabag\SkProposal\Index::class)->name('surat-keluar.kabag.sk-proposal.index');
    Route::get('/surat-keluar/disposisi-kabag/sk-proposal/{id}', App\Http\Livewire\SuratKeluar\Kabag\SkProposal\Disposisi::class)->name('surat-keluar.kabag.disposisi.sk-proposal');

    Route::get('/surat-keluar/kabag/sk-ujian-hasil', App\Http\Livewire\SuratKeluar\Kabag\SkUjianHasil\Index::class)->name('surat-keluar.kabag.sk-ujian-hasil.index');
    Route::get('/surat-keluar/disposisi-kabag/sk-ujian-hasil/{id}', App\Http\Livewire\SuratKeluar\Kabag\SkUjianHasil\Disposisi::class)->name('surat-keluar.kabag.disposisi.sk-ujian-hasil');

    Route::get('/surat-keluar/kabag/sk-komprehensif', App\Http\Livewire\SuratKeluar\Kabag\SkKompre\Index::class)->name('surat-keluar.kabag.sk-komprehensif.index');
    Route::get('/surat-keluar/disposisi-kabag/sk-komprehensif/{id}', App\Http\Livewire\SuratKeluar\Kabag\SkKompre\Disposisi::class)->name('surat-keluar.kabag.disposisi.sk-komprehensif');

    Route::get('/surat-keluar/kabag/sk-pembimbing-skripsi', App\Http\Livewire\SuratKeluar\Kabag\SkPembimbingSkripsi\Index::class)->name('surat-keluar.kabag.sk-pembimbing-skripsi.index');
    Route::get('/surat-keluar/disposisi-kabag/sk-pembimbing-skripsi/{id}', App\Http\Livewire\SuratKeluar\Kabag\SkPembimbingSkripsi\Disposisi::class)->name('surat-keluar.kabag.disposisi.sk-pembimbing-skripsi');
});

Route::group(['middleware' => ['auth', 'auth_kemahasiswaan']], function(){
    Route::get('/surat-masuk/kemahasiswaan', App\Http\Livewire\SuratMasukUmum\Kemahasiswaan\Index::class)->name('surat-masuk-umum.kemahasiswaan.index');
    
    Route::get('/surat-keluar/kemahasiswaan/kartu-mahasiswa', App\Http\Livewire\SuratKeluar\Kemahasiswaan\KartuMahasiswa\Index::class)->name('surat-keluar.kemahasiswaan.kartu-mahasiswa.index');
    Route::get('/surat-keluar/kemahasiswaan/kartu-mahasiswa/edit/{id}',  App\Http\Livewire\SuratKeluar\Kemahasiswaan\KartuMahasiswa\Edit::class)->name('surat-keluar.kemahasiswaan.kartu-mahasiswa.edit');
});

Route::group(['middleware' => ['auth', 'auth_pendidikan']], function(){
    Route::get('/surat-masuk/pendidikan', App\Http\Livewire\SuratMasukUmum\Pendidikan\Index::class)->name('surat-masuk-umum.pendidikan.index');

    Route::get('/surat-keluar/pendidikan/sk-proposal', App\Http\Livewire\SuratKeluar\Pendidikan\SkProposal\Index::class)->name('surat-keluar.pendidikan.sk-proposal.index');
    Route::get('/surat-keluar/pendidikan/sk-proposal/edit/{id}',  App\Http\Livewire\SuratKeluar\Pendidikan\SkProposal\Edit::class)->name('surat-keluar.pendidikan.sk-proposal.edit');

    Route::get('/surat-keluar/pendidikan/sk-ujian-hasil', App\Http\Livewire\SuratKeluar\Pendidikan\SkUjianHasil\Index::class)->name('surat-keluar.pendidikan.sk-ujian-hasil.index');
    Route::get('/surat-keluar/pendidikan/sk-ujian-hasil/edit/{id}',  App\Http\Livewire\SuratKeluar\Pendidikan\SkUjianHasil\Edit::class)->name('surat-keluar.pendidikan.sk-ujian-hasil.edit');

    Route::get('/surat-keluar/pendidikan/sk-pembimbing-skripsi', App\Http\Livewire\SuratKeluar\Pendidikan\SkPembimbingSkripsi\Index::class)->name('surat-keluar.pendidikan.sk-pembimbing-skripsi.index');
    Route::get('/surat-keluar/pendidikan/sk-pembimbing-skripsi/edit/{id}',  App\Http\Livewire\SuratKeluar\Pendidikan\SkPembimbingSkripsi\Edit::class)->name('surat-keluar.pendidikan.sk-pembimbing-skripsi.edit');

    Route::get('/surat-keluar/pendidikan/sk-komprehensif', App\Http\Livewire\SuratKeluar\Pendidikan\SkKompre\Index::class)->name('surat-keluar.pendidikan.sk-komprehensif.index');
    Route::get('/surat-keluar/pendidikan/sk-komprehensif/edit/{id}',  App\Http\Livewire\SuratKeluar\Pendidikan\SkKompre\Edit::class)->name('surat-keluar.pendidikan.sk-komprehensif.edit');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/lacak-surat', App\Http\Livewire\LacakPosisiSurat::class)->name('lacak.surat');
Route::get('/validasi-surat/{id}', App\Http\Livewire\ValidasiSurat::class)->name('validasi.surat');


////////////////////////////////////////////////////////
Route::group(['middleware' => ['auth']], function(){
    Route::get('pengaturan', App\Http\Livewire\Pengaturan::class)->name('pengaturan-pengguna');

    Route::get('keterangan-kartu-mahasiswa/{id}', [App\Http\Controllers\KemahasiswaanController::class, 'kartuMahasiswa'])->name('keterangan-kartu-mahasiswa');
    Route::get('sk-proposal/{id}', [App\Http\Controllers\PendidikanController::class, 'skProposal'])->name('sk-proposal');
    Route::get('sk-ujian-hasil/{id}', [App\Http\Controllers\PendidikanController::class, 'skUjianHasil'])->name('sk-ujian-hasil');
    Route::get('sk-komprehensif/{id}', [App\Http\Controllers\PendidikanController::class, 'skKompre'])->name('sk-komprehensif');
    Route::get('sk-pembimbing-skripsi/{id}', [App\Http\Controllers\PendidikanController::class, 'skPembimbingSkripsi'])->name('sk-pembimbing-skripsi');
});