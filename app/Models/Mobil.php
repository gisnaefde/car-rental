<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';
    use HasFactory;
    public function stock(){
        return $this->hasMany(StockMobil::class);
    }
}
