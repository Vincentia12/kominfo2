<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemilik extends Model
{
    use HasFactory;

    protected $table = "pemiliks";
    protected $primarykay = "id";
    
    protected $fillable = [
        // 'id', 
        'aset_id', 
        'nama', 
        'keterangan'

    ];
 
    public function aset()
    {
    	return $this->belongsTo(aset::class);
    }
}
