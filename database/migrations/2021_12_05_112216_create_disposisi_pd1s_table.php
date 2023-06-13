<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisiPd1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisi_pd1', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_surat');
            $table->text('catatan')->nullable();
            $table->enum('type', ['surat_keluar', 'surat_masuk'])->nullable();
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
        Schema::dropIfExists('disposisi_pd1s');
    }
}
