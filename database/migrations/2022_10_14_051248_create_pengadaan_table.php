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
        Schema::create('pengadaans', function (Blueprint $table) {
            // $table->id();
            // $table->foreignId('pelaksana_id')->constrained();
            // $table->string('jenis_pengadaan');
            // $table->string('total_hps');
            // $table->string('deskripsi_hps');
            // $table->string('harga_penawaran');
            // $table->string('deskripsi_penawaran');
            // $table->string('nilai_negosiasi');
            // $table->string('deskripsi_negosiasi');
            // $table->timestamps();

            $table->id();
            $table->foreignId('pelaksana_id')->constrained();
            $table->string('jenis_pengadaan');
            $table->string('total_hps');
            $table->text('deskripsi_hps');
            $table->string('harga_penawaran');
            $table->text('deskripsi_penawaran');
            $table->string('nilai_negosiasi');
            $table->text('deskripsi_negosiasi');
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
        Schema::dropIfExists('pengadaans');
    }
};
