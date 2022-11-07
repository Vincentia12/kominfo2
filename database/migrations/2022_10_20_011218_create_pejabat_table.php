<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pejabats', function (Blueprint $table) {
            // $table->id();
            // $table->string('kuasa_pengguna_anggaran');
            // $table->string('nip_kuasa_pengguna');
            // $table->string('pejabat_pembuatan_komitmen');
            // $table->string('nip_pejabat_komitmen');
            // $table->string('pejabat_pengadaan');
            // $table->string('nip_pejabat_pengadaan');
            // $table->string('bpp');
            // $table->string('nip_bpp');
            // $table->timestamps();

            $table->id();
            $table->Integer('tahun_sk');
            $table->date('tanggal_sk');
            $table->string('nomor_sk');
            $table->string('kuasa_pengguna_anggaran');
            $table->string('nip_kuasa_pengguna');
            $table->string('pejabat_pembuatan_komitmen');
            $table->string('nip_pejabat_komitmen');
            $table->string('pejabat_pengadaan');
            $table->string('nip_pejabat_pengadaan');
            $table->string('bpp');
            $table->string('nip_bpp');
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
        Schema::dropIfExists('pejabats');
    }
};
