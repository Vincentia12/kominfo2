<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pejabat extends Model
{
    use HasFactory;

    protected $table = "pejabats";
    protected $primarykay = "id";
    protected $dates = ['tanggal_sk'];

    protected $fillable = [
        // 'id',
        // 'tahun_sk',
        'tanggal_sk',
        'nomor_sk',
        'kuasa_pengguna_anggaran',
        'nip_kuasa_pengguna',
        'pejabat_pembuatan_komitmen',
        'nip_pejabat_komitmen',
        'pejabat_pengadaan',
        'nip_pejabat_pengadaan',
        'bpp',
        'nip_bpp',
        'pengurus_barang',
        'nip_pengurus_barang'
    ];
    
    public function getCreatedTanggalAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_sk'])
            ->translatedFormat('l, d F Y');
    }
}
