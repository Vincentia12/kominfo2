<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = "jadwals";
    protected $primarykay = "id";

    protected $fillable = [
        // 'id', 
        'pengadaan_id',
        'kegiatan',
        'alokasi',
        'hari',
        'tanggal',
        'nomor',
        'deskripsi_tgl'
    ];

    public function pengadaan()
    {
        return $this->belongsTo(pengadaan::class);
    }
}
