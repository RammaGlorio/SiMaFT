<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeluarKartuMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluar_kartu_mahasiswas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_surat');
            $table->string('nomor_surat')->nullable();
            $table->string('nama_mhs');
            $table->string('nim');
            $table->string('jurusan_prodi');
            $table->enum('status', ['dekan','pd1','pd2','pd3','kemahasiswaan','kabag','umum']);
            $table->string('status_selesai')->nullable();
            $table->enum('tanda_tangan', ['dekan','pd1','pd2','pd3'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_keluar_kartu_mahasiswas');
    }
}
