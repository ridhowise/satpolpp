<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable = ['nama','slug','icon','color'];

    public function post()
    {
        return $this->hasMany(Post::class,'kategori_id');
    }

}