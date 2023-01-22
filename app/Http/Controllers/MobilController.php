<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    // API
    public function index () {
        $mobil = Mobil::all();

        return response()->json($mobil);
    }


    //Monolite
    public function daftar_mobil(){
        $mobil = Mobil::all();
        return view('daftar_mobil',['daftar_mobil'=>$mobil]);
    }

    public function tambah_mobil(){
        return view('tambah_mobil');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'jumlah_kursi' => 'required|integer',
            'bahan_bakar' => 'required|string|max:255',
            'warna' => 'required|string|max:255',
            'tahun' => 'required|integer',
            'nopol' => 'required|string|max:255',
            'harga_sewa_jam' => 'required|integer',
            'harga_sewa_hari' => 'required|integer',

        ]);

        Mobil::create($request->all());

        return redirect('/daftar-mobil')->with('success','Mobil berhasil ditambahkan');
    }
}
