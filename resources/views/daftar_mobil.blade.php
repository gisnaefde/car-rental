@extends('layout.app')
@section('title','daftar-mobil')

@section('link')
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Mobil</h6>
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
                        <th>Harga Sewa Per Jam</th>
                        <th>Harga Sewa Per Hari</th>
                        <th>Jumlah</th>
                        <th>Tersedia</th>
                        <th>Dipinjam</th>
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
                        <td>{{$item->harga_sewa_jam}}</td>
                        <td>{{$item->harga_sewa_hari}}</td>
                        @foreach($item->stock as $stock)
                        <td>{{ $stock->jumlah }}</td>
                        <td>{{ $stock->tersedia }}</td>
                        <td>{{ $stock->pinjam }}</td>
                        @endforeach

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
