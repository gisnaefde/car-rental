<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';
    use HasFactory;
    public function stock()
    {
        return $this->hasMany(StockMobil::class);
    }

    public function sewa()
    {
        return $this->hasMany(Sewa::class);
    }

    protected $fillable = [
        'type',
        'merk',
        'jumlah_kursi',
        'bahan_bakar',
        'warna',
        'tahun',
        'nopol',
        'harga_sewa_jam',
        'harga_sewa_hari',
        'car_image',
    ];
}
