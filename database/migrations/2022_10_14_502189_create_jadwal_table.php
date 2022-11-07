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
        Schema::create('jadwals', function (Blueprint $table) {
            // $table->id();
            // $table->foreignId('pengadaan_id')->constrained();
            // $table->string('kegiatan');
            // $table->string('alokasi');
            // $table->string('hari');
            // $table->date('tanggal');
            // $table->string('nomor');
            // $table->string('deskripsi_tgl');
            // $table->timestamps();

            $table->id();
            $table->foreignId('pengadaan_id')->constrained();
            $table->string('kegiatan');
            $table->string('alokasi');
            $table->string('hari');
            $table->date('tanggal');
            $table->bigInteger('nomor');
            $table->text('deskripsi_tgl');
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
        Schema::dropIfExists('jadwals   ');
    }
};
