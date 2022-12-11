<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pengadaan extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'id', 
        'pelaksana_id',
        'jenis_pengadaan',
        'kode_rekening',
        'total_hps',
        'deskripsi_hps',
        'harga_penawaran',
        'deskripsi_penawaran',
        'nilai_negosiasi',
        'deskripsi_negosiasi'
    ];

    protected $table = "pengadaans";
    protected $primarykay = "id";
    protected $dates = ['tanggal'];

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

    public function getCreatedTanggalAttribute()
    {
        return Carbon::parse($this->attributes['tanggal'])
            ->translatedFormat('l, d F Y');
    }
}
