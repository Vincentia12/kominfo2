<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DB::raw('CREATE TRIGGER `jumlah_harga` AFTER INSERT ON `barangs` FOR EACH ROW 
        // BEGIN UPDATE barangs SET jumlah_harga = jumlah_barang * harga_satuan; END');
        Schema::create('triggers', function (Blueprint $table) {
            $table->id();
            $table->string('hash');
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
        Schema::dropIfExists('trigger');
        // DB::raw('DROP TRIGGER `tr_User_Default_Member_Role`');
    }
};
