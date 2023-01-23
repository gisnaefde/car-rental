@extends('layout.app')
@section('title','Detail-Mobil')

@section('content')

<div class="container">
    <div class="d-sm-flex  card-header py-3 justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Detail Mobil</h6>
    </div>

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Detail</h1>
                        </div>
                        <hr>
                        <div class='row'>
                            <div class=" col-md-4">
                                <!-- <div class=" bg-primary rounded text-white " style="width: 50%;">
                                    <p class="text-center">{{$mobil->harga_sewa_jam}}</p>
                                    <p class="text-center" style="font-size:10px;">Harga Sewa/Jam</p>
                                </div> -->
                                <div class="ml-4 mb-2 font-weight-bold row"> Type</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Merk</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Jumlah Kursi</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Bahan Bakar</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Warna</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Tahun</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Nopol</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Harga Sewa/Jam</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Harga Sewa/Hari</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Status</div>
                            </div>
                            <div class="col-md-8">
                                <div class="ml-3 mb-2 text-capitalize row">: {{$mobil->type}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$mobil->merk}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$mobil->jumlah_kursi}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$mobil->bahan_bakar}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$mobil->warna}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$mobil->tahun}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$mobil->nopol}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$mobil->harga_sewa_jam}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$mobil->harga_sewa_hari}}</div>
                                @if ($mobil->status == 1)
                                <div class="ml-3 mb-2 text-capitalize row">: Tersedia</div>
                                @else
                                <div class="ml-3 mb-2 text-capitalize row">: Dipinjam</div>
                                @endif
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
