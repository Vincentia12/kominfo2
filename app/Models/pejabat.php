<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'id',
        'tahun_sk',
        'tanggal_sk',
        'nomor_sk',
        'kuasa_pengguna_anggaran',
        'nip_kuasa_pengguna',
        'pejabat_pembuatan_komitmen',
        'nip_pejabat_komitmen',
        'pejabat_pengadaan',
        'nip_pejabat_pengadaan',
        'bpp',
        'nip_bpp'
    ];

    protected $table = "pejabats";
    protected $primarykay = "id";
    
 
    // public function pemilik()
    // {
    // 	return $this->hasOne(pemilik::class);
    // }
}
