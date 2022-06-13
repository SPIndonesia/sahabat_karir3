<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];
    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
