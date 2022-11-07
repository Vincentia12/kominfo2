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
        Schema::create('barangs', function (Blueprint $table) {
            // $table->id();
            // $table->foreignId('pengadaan_id')->constrained();
            // $table->string('barang');
            // $table->string('jumlah_barang');
            // $table->string('satuan');
            // $table->string('harga_satuan');
            // $table->timestamps();

            $table->id();
            $table->foreignId('pengadaan_id')->constrained();
            $table->string('barang');
            $table->bigInteger('jumlah_barang');
            $table->string('satuan');
            $table->string('harga_satuan');
            $table->timestamps();
            // $table->integer('satuan');
            // $table->integer('harga_satuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};
