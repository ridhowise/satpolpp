<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjekWisata extends Model
{
    use HasFactory;
    protected $table = 'objek_wisata';
    protected $fillable= ['layanan_id','namaObjekWisata','slugObjekWisata','detailsObjekWisata','image'];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class,'layanan_id');
    }
}
