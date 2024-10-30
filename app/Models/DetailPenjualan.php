<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_detail',
        'id_penjualan',
        'id_produk',
        'jumlah_produk',
        'subtotal',
    ];
    public function Pelanggan()
{
    
        return $this->hasMany(Pelanggan::class, 'id_pelanggan', 'id');
}
public function Penjualan()
{
    
        return $this->hasMany(Penjualan::class, 'id_penjualan', 'id');
}
public function Produk()
{
    
        return $this->hasMany(Produk::class, 'id_produk', 'id');
}
}
