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

        <!-- Outer Row -->
        <div class="col-lg-12">
            <div class="p-5">
                <form action="/sewa" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group mt-2">
                                <select class="form-control" name="tenant_id">
                                    @foreach($sewa as $item)
                                    <option value="{{$item->tenant->id}}">{{$item->tenant->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <select class="form-control" name="mobil_id">
                                    @foreach($sewa as $item)
                                    <option value="{{$item->tenant->id}}">{{$item->mobil->type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <input type="date" name="tanggal_sewa" class="form-control " placeholder="Tanggal Sewa">
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
