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
<<<<<<< HEAD
        return $this->belongsTo(pengadaan::class);
=======
    	return $this->belongsTo(pengadaan::class);
>>>>>>> 46a6761052d4a8a752c3a3659618126fcece2b38
    }
}
