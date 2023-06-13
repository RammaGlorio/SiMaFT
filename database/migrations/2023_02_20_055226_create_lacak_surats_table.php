<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLacakSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lacak_surats', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_surat'); // id surat masuk umum
            $table->enum('type', ['surat_masuk', 'surat_keluar']);
            $table->enum('posisi', ['dekan','pd1','pd2','pd3','kabag','umum','kemahasiswaan','pendidikan'])->nullable();
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
        Schema::dropIfExists('lacak_surats');
    }
}
