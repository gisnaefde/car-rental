@extends('layout.app')
@section('title','daftar-mobil')

@section('link')
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseif(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@else

@endif
<div class="card shadow mb-4">
    <div class="d-flex  card-header py-3 justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Mobil</h6>
        <div>
            <a href="/daftar-mobil-tersedia" class="d-none d-sm-inline-block mx-1 btn btn-sm btn-success shadow-sm">Tersedia</a>
            <a href="/daftar-mobil-dipinjam" class="d-none d-sm-inline-block mx-1 btn btn-sm btn-danger shadow-sm">Disewa</a>
            <a href="/tambah-mobil" class="d-none d-sm-inline-block mx-1 btn btn-sm btn-primary shadow-sm">Tambah Mobil</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                @foreach($groupByType as $item)
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="storage/car_image/1674660730-yaris.png" style="width: 150px;">
                            </div>
                            <div class="row no-gutters align-items-center mt-2">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <p>Type : {{$item->type}}</p>
                                    </div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <p>Kursi : {{$item->jumlah_kursi}}</p>
                                    </div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <p>Harga : {{$item->harga_sewa_hari}}</p>
                                    </div>
                                    <div class="row ml-0 d-flex justify-content-between">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> Tersedia
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1 d-flex justify-content-center">
                                            <p>{{$item->status}}</p>
                                            </div>
                                        </div>
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> Dipinjam
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1 d-flex justify-content-center">
                                                <p>{{$item->status}}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>
@endsection
