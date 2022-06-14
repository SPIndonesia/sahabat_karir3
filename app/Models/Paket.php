<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    // use HasFactory;
    protected $table = "tb_paket";
    protected $primaryKey = "id_paket";
    protected $fillable = [
        'nama', 'harga', 'deskripsi', 'id_kategori', 'image_url',
    ];
    // public $timestamps = false;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public  function user()
    {
        return $this->hasMany(UserPaket::class, 'id_user', 'id');
    }
}
