<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasukUmumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk_umums', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('no_surat_masuk');
            $table->date('tanggal_terima');
            $table->date('tanggal_surat');
            $table->string('pengirim');
            $table->string('perihal_surat');
            $table->enum('jenis_surat', ['ket_kartu_mhs', 'sk_proposal', 'sk_pembimbing_skripsi','sk_ujian_hasil','sk_kompre']);
            $table->enum('sifat_surat', ['Biasa', 'Segera', 'Sangat Segera', 'Penting', 'Rahasia']);
            $table->string('scan_file_surat');
            $table->enum('status', ['umum', 'dekan', 'pd1', 'pd2', 'pd3', 'kabag', 'pendidikan', 'kemahasiswaan', 'subumum']);
            // $table->enum('disposisi_1', ['dekan'])->nullable();
            $table->enum('disposisi_pd', ['pd1', 'pd2', 'pd3'])->nullable();
            // $table->enum('disposisi_3', ['kabag'])->nullable();
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
        Schema::dropIfExists('surat_masuk_umums');
    }
}
