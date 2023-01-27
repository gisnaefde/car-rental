<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function rekap_sewa(){
        $sewa = Sewa::with(['tenant', 'mobil'])->whereIn('status', [ 1,2])->get();
        return view('sewa/rekap_sewa', ['sewa'=>$sewa]);

    }

    public function detail_sewa($id){
        $detail_sewa = Sewa::where('id',$id)->with(['tenant', 'mobil'])->first();
        return view('sewa/detail-sewa', ['detail_sewa'=>$detail_sewa]);
    }

    public function tepat_waktu(){
        $tepat_waktu = Sewa::with(['tenant', 'mobil'])->whereIn('status', [2])->get();
        return view('sewa/tepat_waktu', ['tepat_waktu'=>$tepat_waktu]);
    }

    public function terlambat(){
        $terlambat = Sewa::with(['tenant', 'mobil'])->whereIn('status', [1])->get();
        return view('sewa/terlambat', ['terlambat'=>$terlambat]);
    }

    public function disewa(){
        $disewa = Sewa::with(['tenant', 'mobil'])->whereIn('status', [3])->get();
        return view('sewa/disewa', ['disewa'=>$disewa]);
    }
}
