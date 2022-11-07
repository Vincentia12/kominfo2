<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaksana extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'id',
        'pt_pelaksana',
        'alamat',
        'nama_pelaksana',
        'jabatan_pelaksana',
        'kode_rekening',
        'npwp',
        'tlp'
    ];

    protected $table = "pelaksanas";
    protected $primarykay = "id";
    
 
    public function pengadaan()
    {
    	return $this->hasOne(Pengadaan::class);
    }

}
