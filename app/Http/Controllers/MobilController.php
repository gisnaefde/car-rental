<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index () {
        $mobil = Mobil::with('stock')->get();

        return response()->json($mobil);
    }
}
