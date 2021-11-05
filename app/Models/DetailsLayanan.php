<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsLayanan extends Model
{
    use HasFactory;
    protected $table = 'details_layanan';
    protected $fillable= ['layanan_id','image','title','subtitle','details','slug'];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class,'layanan_id');
    }
}
