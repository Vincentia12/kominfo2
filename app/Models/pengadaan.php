<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadaan extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'id', 
        'pelaksana_id',
        'jenis_pengadaan',
        'total_hps',
        'deskripsi_hps',
        'harga_penawaran',
        'deskripsi_penawaran',
        'nilai_negosiasi',
        'deskripsi_negosiasi'
    ];

    protected $table = "pengadaans";
    protected $primarykay = "id";

    public function barang()
    {
        return $this->hasMany(barang::class);
    }
    public function jadwal()
    {
        return $this->hasMany(jadwal::class);
    }


    public function pelaksana()
    {
        return $this->belongsTo(pelaksana::class);
    }
}
