@extends('layout.app')
@section('title','Detail-Mobil')

@section('content')

<div class="container">
    <div class="d-sm-flex  card-header py-3 justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Detail Sewa</h6>
    </div>

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <div class="text-center mt-5">
                <h1 class="h4 text-gray-900 mb-4">Detail</h1>
            </div>
            <hr>
            <!-- Nested Row within Card Body -->
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{$detail_sewa->mobil->car_image != null ? asset('/storage/car_image/'.$detail_sewa->mobil->car_image): asset('/img/default.png')}}" style="height: 200px"></img>
            </div>
            <div >
                <div class="">
                    <div class="p-5">
                        <div class="row">
                            <div class="col-6">
                            <div class='row'>
                            <div class=" col-md-4">
                                <div class="ml-4 mb-2 font-weight-bold row"> Type</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Merk</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Tahun</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Nopol</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Nama Penyewa</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Alamat</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> No Handphone</div>
                            </div>
                            <div class="col-md-8">
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->mobil->type}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->mobil->merk}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->mobil->tahun}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->mobil->nopol}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->tenant->nama}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->tenant->alamat}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->tenant->no_hp}}</div>


                            </div>
                        </div>
                            </div>
                            <div class="col-6">
                            <div class='row'>
                            <div class=" col-md-4">
                                <div class="ml-4 mb-2 font-weight-bold row"> Email</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Tanggal Sewa</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Tanggal Kembali</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Lama Sewa</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Harga Sewa</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Denda</div>
                                <div class="ml-4 mb-2 font-weight-bold row"> Status</div>
                            </div>
                            <div class="col-md-8">
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->tenant->email}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->tanggal_sewa}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->tanggal_kembali}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->lama_sewa}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->harga_sewa}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->denda}}</div>
                                <div class="ml-3 mb-2 text-capitalize row">: {{$detail_sewa->status}}</div>

                            </div>
                        </div>
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
