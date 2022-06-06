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
        'nama', 'harga', 'deskripsi', 'id_kategori'
    ];
    // public $timestamps = false;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
