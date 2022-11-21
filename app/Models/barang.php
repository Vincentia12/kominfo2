<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = "barangs";
    protected $primarykay = "id";
    
    protected $fillable = [
        // 'id', 
        'pengadaan_id',
        'barang',
        'jumlah_barang',
        'satuan',
        'harga_satuan'
    ];
 
    public function pengadaan()
    {
    	return $this->belongsTo(pengadaan::class);
    }

}
