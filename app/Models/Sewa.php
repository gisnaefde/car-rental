<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;
    protected $table = 'sewa';

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }

    protected $fillable = [
        'tanggal_sewa',
        'lama_sewa',
    ];
}
