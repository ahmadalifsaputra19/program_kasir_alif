<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_harga',
        'id_pelanggan',
    ];

    public function Pelanggan()
{
    
        return $this->hasMany(Pelanggan::class, 'id_pelanggan', 'id');
}

}