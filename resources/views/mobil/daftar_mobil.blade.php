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
@else
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('error') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="card shadow mb-4">
    <div class="d-sm-flex  card-header py-3 justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Mobil</h6>
        <a href="/tambah-mobil" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Mobil</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Type</th>
                        <th>Merk</th>
                        <th>Jumlah Kursi</th>
                        <th>Bahan Bakar</th>
                        <th>Warna</th>
                        <th>Tahun</th>
                        <th>Nopol</th>
                        <th>Harga Sewa/Jam</th>
                        <th>Harga Sewa/Hari</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($daftar_mobil as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->merk}}</td>
                        <td>{{$item->jumlah_kursi}}</td>
                        <td>{{$item->bahan_bakar}}</td>
                        <td>{{$item->warna }}</td>
                        <td>{{$item->tahun }}</td>
                        <td>{{$item->nopol }}</td>
                        <td>{{$item->harga_sewa_jam}}</td>
                        <td>{{$item->harga_sewa_hari}}</td>
                        @if($item->status=='1')
                        <td style="color:green">tersedia</td>
                        @else
                        <td style="color:red">dipinjam</td>
                        @endif
                        <td>
                            <a class="text-primary mr-2">
                                <i class="fas fa-eye"></i>
                                <!-- <i class="fas fa-angle-up"></i> -->
                            </a>
                            <a class="text-warning" href="/edit-mobil/{{$item->id}}" >
                                <i class="fas fa-edit"></i>
                                <!-- <i class="fas fa-angle-up"></i> -->
                            </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>
@endsection
