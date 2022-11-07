<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
// $asetPemilik = Aset::find(1)->pemilik;
class aset extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'id',
            'no_sertifikat',
            'nama_aset',
            'alamat_aset',
            'luas_aset',
            'status_aset',
            'kondisi_aset',
            'kondisi_geografis',
            'asalusul_aset',
            'th_kepemilikan',
            'th_pembangunan',
            'th_rehab',
            'keterangan_aset'
    ];

    protected $table = "asets";
    protected $primarykay = "id";
    
 
    public function pemilik()
    {
    	return $this->hasOne(pemilik::class);
    }
}
