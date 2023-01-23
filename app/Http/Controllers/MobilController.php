<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        return view('mobil/daftar_mobil',['daftar_mobil'=>$mobil]);
    }
    public function daftar_mobil_tersedia(){
        $mobil_tersedia = Mobil::where('status', 1)->get();
        return view ('/mobil/daftar_mobil_tersedia',['mobil_tersedia'=>$mobil_tersedia]);
    }

    public function daftar_mobil_dipinjam_(){
        $mobil_dipinjam = Mobil::where('status', 0)->get();
        return view ('/mobil/daftar_mobil_dipinjam_',['mobil_dipinjam_'=>$mobil_dipinjam]);
    }

    public function tambah_mobil(){
        return view('mobil/tambah_mobil');
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'type' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'jumlah_kursi' => 'required|integer',
            'bahan_bakar' => 'required|string|max:255',
            'warna' => 'required|string|max:255',
            'tahun' => 'required|integer',
            'nopol' => 'required|string|max:255',
            'harga_sewa_jam' => 'required|integer',
            'harga_sewa_hari' => 'required|integer',
            'car_image' => 'required',
        ]);

        if ($validated->fails()) {
            // input gagal, mengirimkan session gagal
            session()->flash('error', 'Gagal menambahkan data, pastikan semua isian terisi.');
            return redirect('/tambah-mobil');
        }

        $nameImage="";
        if($request->file('car_image')){
            $name = $request->car_image->getClientOriginalName();
            $nameImage = now()->timestamp.'-'.$name;
            $request->car_image->storeAs('car_image', $nameImage);
        }
        $request['car_image'] = $nameImage;
        $mobil = Mobil::create($request->all());
        session()->flash('success', 'Data berhasil ditambahkan.');
        return redirect('/daftar-mobil');
    }

    public function edit($id){
        $mobil = Mobil::where('id',$id)->first();
        return view('/mobil/edit_mobil',['mobil'=>$mobil]);
    }

    public function update($id, Request $request){
        $id_ = $id;
        $mobil = Mobil::where('id',$id)->first();
        $validated = Validator::make($request->all(),[
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
        if ($validated->fails()) {
            // input gagal, mengirimkan session gagal
            session()->flash('error', 'Gagal menambahkan data, pastikan semua isian terisi.');
            return redirect('/daftar-mobil');
        }
        $mobil->update($request->all());
        session()->flash('success', 'Data berhasil ditambahkan.');
        return redirect('/daftar-mobil');
    }

    public function detail($id){
        $mobil = Mobil::where('id',$id)->first();
        return view('/mobil/detail_mobil',['mobil'=>$mobil]);
    }

}
