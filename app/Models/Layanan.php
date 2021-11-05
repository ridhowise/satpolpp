<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $fillable = ['nama','slug','icon','color'];
    public function detailsLayanan()
    {
        return $this->hasMany(DetailsLayanan::class,'layanan_id');
    }
    public function objekWisata()
    {
        return $this->hasMany(ObjekWisata::class,'layanan_id');
    }
}
