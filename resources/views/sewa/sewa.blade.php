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
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penyewa</th>
                        <th>Tipe Mobil</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Kembali</th>
                        <th>Lama Sewa</th>
                        <th>Harga Sewa</th>
                        <th>Denda</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sewa as $s)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $s->tenant->nama }}</td>
                        <td>{{ $s->mobil->type }}</td>
                        <td>{{ $s->tanggal_sewa }}</td>
                        <td>{{ $s->tanggal_kembali }}</td>
                        <td>{{ $s->lama_sewa }}</td>
                        <td>{{ $s->harga_sewa }}</td>
                        <td>{{ $s->denda }}</td>
                        @if($s->status=='0')
                        <td style="color:red">Belum Dikembalikan</td>
                        @elseif($s->status=='1')
                        <td style="color:blue">Dikembalikan Terlambat</td>
                        @else
                        <td style="color:green">Dikembalikan Tepat Waktu</td>
                        @endif
                        <td>
                            <a class="text-primary mr-2" href="/detail-sewa/{{$s->id}}">
                                <i class="fas fa-eye"></i>
                            </a>
                            <!-- <a class="text-warning" href="/edit-mobil/{{$s->id}}">
                                <i class="fas fa-edit"></i>
                            </a> -->
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
