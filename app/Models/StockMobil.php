<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockMobil extends Model
{
    protected $table = 'stock_mobil';
    use HasFactory;
    public function mobil(){
        return $this->belongsTo(Mobil::class);
    }
}
