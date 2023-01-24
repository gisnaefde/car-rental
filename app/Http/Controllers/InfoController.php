<?php

namespace App\Http\Controllers;

use App\Models\Info;
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
}
