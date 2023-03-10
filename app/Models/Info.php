<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = "info";
    use HasFactory;
    protected $fillable = [
        'info',
        'no_admin',
        'sdk',
        'lokasi',
        'procedure',
    ];
}
