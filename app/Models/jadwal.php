<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = "jadwals";
    protected $primarykay = "id";
    protected $dates = ['tanggal'];

    protected $fillable = [
        // 'id', 
        'pengadaan_id',
        'kegiatan',
        'alokasi',
        'tanggal',
        'nomor',
        'deskripsi_tgl'
    ];

    public function pengadaan()
    {
        return $this->belongsTo(pengadaan::class);
    }

    public function getCreatedTanggalAttribute()
    {
        return Carbon::parse($this->attributes['tanggal'])
            ->translatedFormat('l, d F Y');
    }
}
