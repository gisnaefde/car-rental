<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function sewa(){
        $sewa = Sewa::with(['tenant', 'mobil'])->get();
        return view('sewa/sewa', ['sewa'=>$sewa]);

    }

    public function detail_sewa($id){
        $detail_sewa = Sewa::where('id',$id)->with(['tenant', 'mobil'])->first();
        return view('sewa/detail-sewa',['detail_sewa'=> $detail_sewa]);
    }
}
