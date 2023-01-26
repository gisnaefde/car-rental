<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function tenants(){
        $tenants = Tenant::all();
        return view('/tenant/list_tenant',['tenants'=>$tenants]);

    }
}
