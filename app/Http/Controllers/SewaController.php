<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Sewa;
use App\Models\Tenant;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function sewa()
    {
        $sewa = Sewa::with(['tenant', 'mobil'])->get();
        return view('/sewa/sewa', ['sewa' => $sewa]);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'tenant_id' => 'required|exists:tenant,id',
            'mobil_id' => 'required|exists:mobil,id',
            'tanggal_sewa' => 'required|date',
            'lama_sewa' => 'required|integer',
        ]);

        //Menambhakan tanggalkembali
        $tanggal_sewa = Carbon::createFromFormat('Y-m-d', $request->input('tanggal_sewa'));
        $lama_sewa = $request->input('lama_sewa');
        $tanggal_kembali = $tanggal_sewa->addDays($lama_sewa);

        //Mendapatkan harga_sewa_hari
        $mobil = Mobil::where('id',  $request->input('tenant_id'))->get();
        foreach ($mobil as $item) {
                $sewa = $item->harga_sewa_hari;
                break;
        }
        $harga_sewa = $lama_sewa*$sewa;

        // create new instance of Sewa model
        $sewa = new Sewa();

        // set the input data to the model properties
        $sewa->tenant_id = $request->input('tenant_id');
        $sewa->mobil_id = $request->input('mobil_id');
        $sewa->tanggal_sewa = $request->input('tanggal_sewa');
        $sewa->lama_sewa = $request->input('lama_sewa');
        $sewa->tanggal_kembali = $tanggal_kembali;
        $sewa->harga_sewa = $harga_sewa;

        // save the model to the database
        $sewa->save();

    }

    public function rekap_sewa()
    {
        $sewa = Sewa::with(['tenant', 'mobil'])->whereIn('status', [1, 2])->get();
        return view('sewa/rekap_sewa', ['sewa' => $sewa]);
    }

    public function detail_sewa($id)
    {
        $detail_sewa = Sewa::where('id', $id)->with(['tenant', 'mobil'])->first();
        return view('sewa/detail-sewa', ['detail_sewa' => $detail_sewa]);
    }

    public function tepat_waktu()
    {
        $tepat_waktu = Sewa::with(['tenant', 'mobil'])->whereIn('status', [2])->get();
        return view('sewa/tepat_waktu', ['tepat_waktu' => $tepat_waktu]);
    }

    public function terlambat()
    {
        $terlambat = Sewa::with(['tenant', 'mobil'])->whereIn('status', [1])->get();
        return view('sewa/terlambat', ['terlambat' => $terlambat]);
    }

    public function disewa()
    {
        $disewa = Sewa::with(['tenant', 'mobil'])->whereIn('status', [3])->get();
        return view('sewa/disewa', ['disewa' => $disewa]);
    }

    public function belum_kembali()
    {
        $belum_kembali = Sewa::with(['tenant', 'mobil'])->whereIn('status', [0])->get();
        return view('sewa/belum_kembali', ['belum_kembali' => $belum_kembali]);
    }
}
