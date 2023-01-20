<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    // API
    public function index () {
        $mobil = Mobil::with('stock')->get();

        return response()->json($mobil);
    }


    //Monolite
    public function daftar_mobil(){
        $mobil = Mobil::with('stock')->get();
        return view('daftar_mobil',['daftar_mobil'=>$mobil]);
    }


    public function add_mobil(Request $request)
    {
        $validated = $request->validate([
            'type' => ['required', 'string', 'max:255'],
            'merk' => ['required', 'string', 'max:255'],
            'jumlah_kursi' => ['required', 'integer'],
            'bahan_bakar' => ['required', 'string', 'max:255'],
            'harga_sewa' => ['required', 'integer']
        ]);

        if ($validated->fails()) {
            return redirect('/mobil/create')->withErrors($validated)->withInput();
        }

        Mobil::create($request->all());

        return redirect('/mobil')->with('success', 'Mobil berhasil ditambahkan');
    }
}
