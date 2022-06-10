<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "tb_kategori";
    protected $primaryKey = "id_kategori";
    protected $fillable = [
        'nama',
        'deskripsi',
        'image_url'
    ];
    public function paket()
    {
        return $this->hasMany(Kategori::class, 'id_kategori', 'id_kategori');
    }
}
