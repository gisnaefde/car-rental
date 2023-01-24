<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function index(){
        $info = Info::all();
        return response()->json($info);
    }

    public function info(){
        $info = Info::all();
        return view('/info/info',['info'=>$info]);
    }

    public function edit($id){
        $info = Info::where('id',$id)->first();
        // dd($info);
        return view('/info/edit_info',['info'=>$info]);
    }

    public function update($id, Request $request){
        $info = Info::where('id',$id)->first();
        // dd($info);
        $validated = Validator::make($request->all(),[
            'info' => 'required|string',
            'no_admin' => 'required|integer',
            'sdk' => 'required|string',
            'lokasi' => 'required|string',
            'procedure' => 'required|string',

        ]);
        if ($validated->fails()) {
            // input gagal, mengirimkan session gagal
            session()->flash('error', 'Gagal mengedit data, pastikan semua isian terisi.');
            return redirect('/info');
        }
        $info->update($request->all());
        session()->flash('success', 'Data berhasil diedit.');
        return redirect('/info');
    }
}
