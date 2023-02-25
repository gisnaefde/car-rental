@extends('layout.app')
@section('title','daftar-mobil')

@section('link')
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="card shadow mb-4">
    <div class="d-sm-flex  card-header py-3 justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Sewa</h6>
    </div>
    <div class="card-body">
        <!-- Unutk memunculkan error jika terjadi kesalahan input -->
        <div class="px-5">
            <div class="alert alert-danger p-2">
                <p>Data penyewa sudah ada sebelumnya, silakan pilih penyewa berdasarkan nik</p>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- Outer Row -->
        <div class="col-lg-12">
            <div class="p-5">
                <form action="/sewa-nik" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group mt-2">
                                <select class="form-control" name="tenant_id">
                                    <option>--Pilih NIK Penyewa--</option>
                                    @foreach($sewa as $item)
                                    <option value="{{$item->tenant->id}}">{{$item->tenant->nik}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <select class="form-control" name="mobil_id">
                                    <option>--Pilih Mobil--</option>
                                    @foreach($sewa as $item)
                                    <option value="{{$item->mobil->id}}">{{$item->mobil->type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <input name="tanggal_sewa" class="form-control " placeholder="Tanggal Sewa" onfocus="(this.type='date')">
                            </div>
                            <div class="form-group mt-2">
                                <input type="number" name="lama_sewa" class="form-control " placeholder="Lama Sewa / Hari">
                            </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-user" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
