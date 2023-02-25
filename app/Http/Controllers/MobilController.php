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
        $groupByType = Mobil::groupBy('type')->get();
        // $groupByType = Mobil::orderBy('type')->get()->groupBy('type'
        $jumlahMobil = Mobil::selectRaw('type, COUNT(*) as jumlah')
                    ->groupBy('type')
                    ->get();
        // dd($groupByType);

        $jumlahMobilPerStatus = Mobil::select('type', 'status', DB::raw('COUNT(*) as jumlah'))
                    ->groupBy('type', 'status')
                    ->get();
        // dd($jumlahMobilPerStatus);

        return view('mobil/daftar_mobil',['daftar_mobil'=>$mobil,"groupByType"=>$groupByType,"jumlahMobil"=>$jumlahMobil, "jumlahMobilPerStatus"=>$jumlahMobilPerStatus ]);
    }

    public function daftar_mobil_detail($id){
        $groupByType = Mobil::groupBy('type')->get();
        $mobil = $groupByType->where('id',$id)->first();
        // dd($mobil);
        return view('mobil/daftar_mobil_detail',['mobil'=>$mobil]);
    }

    public function daftar_mobil_tabel(){
        $mobil = Mobil::all();
        return view('mobil/daftar_mobil_tabel',['mobil'=>$mobil]);
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
            'car_image' => 'required|mimes:jpg,png,jpeg',
        ]);

        if ($validated->fails()) {
            // input gagal, mengirimkan session gagal
            session()->flash('error', 'Gagal menambahkan data, pastikan semua isian terisi.');
            return redirect('/tambah-mobil');
        }

        $name = $request->file('car_image')->getClientOriginalName();
        $nameImage = now()->timestamp.'-'.$name;
        $request->file('car_image')->storeAs('public/car_image', $nameImage);
        $mobil = new Mobil([
            'type' => $request->type,
            'merk' => $request->merk,
            'jumlah_kursi' => $request->jumlah_kursi,
            'bahan_bakar' => $request->bahan_bakar,
            'warna' => $request->warna,
            'tahun' => $request->tahun,
            'nopol' => $request->nopol,
            'harga_sewa_jam' => $request->harga_sewa_jam,
            'harga_sewa_hari' => $request->harga_sewa_hari,
            'car_image'=> $nameImage,
        ]);
        $mobil->save();

        // $request['car_image'] = $nameImage;
        // $mobil = Mobil::create($request->all());
        session()->flash('success', 'Data berhasil ditambahkan.');
        return redirect('/daftar-mobil');
    }

    public function edit($id){
        $mobil = Mobil::where('id',$id)->first();
        return view('/mobil/edit_mobil',['mobil'=>$mobil]);
    }

    public function update($id, Request $request){
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
            'car_image' => 'required|mimes:jpg,png,jpeg',

        ]);
        if ($validated->fails()) {
            // input gagal, mengirimkan session gagal
            session()->flash('error', 'Gagal menambahkan data, pastikan semua isian terisi.');
            return redirect('/daftar-mobil');
        }
        $name = $request->file('car_image')->getClientOriginalName();
        $nameImage = now()->timestamp.'-'.$name;
        $request->file('car_image')->storeAs('public/car_image', $nameImage);

        $mobil->update([
            'type' => $request->type,
            'merk' => $request->merk,
            'jumlah_kursi' => $request->jumlah_kursi,
            'bahan_bakar' => $request->bahan_bakar,
            'warna' => $request->warna,
            'tahun' => $request->tahun,
            'nopol' => $request->nopol,
            'harga_sewa_jam' => $request->harga_sewa_jam,
            'harga_sewa_hari' => $request->harga_sewa_hari,
            'car_image'=> $nameImage,
        ]);
        session()->flash('success', 'Data berhasil diedit.');
        return redirect('/daftar-mobil');
    }

    public function detail($id){
        $mobil = Mobil::where('id',$id)->first();
        return view('/mobil/detail_mobil',['mobil'=>$mobil]);
    }

}
