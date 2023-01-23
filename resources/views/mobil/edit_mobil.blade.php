@extends('layout.app')
@section('title','edit-mobil')
@section('content')

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="card shadow mb-4">
    <div class="d-sm-flex  card-header py-3 justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Edit Mobil</h6>
    </div>
    <div class="card-body">

        <!-- Outer Row -->
        <div class="col-lg-12">
            <div class="p-5">
                <form action="/update-mobil/{{$mobil->id}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col">
                            <div class="form-group mt-2">
                                <input type="text" name="type" class="form-control" placeholder="Type" value="{{$mobil->type}}">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="merk" class="form-control " placeholder="Merk" value="{{$mobil->merk}}">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="jumlah_kursi" class="form-control" placeholder="Jumlah Kursi" value="{{$mobil->jumlah_kursi}}">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="bahan_bakar" class="form-control " placeholder="Bahan Bakar" value="{{$mobil->bahan_bakar}}">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="warna" class="form-control " placeholder="Warna" value="{{$mobil->warna}}">
                            </div>

                        </div>
                        <div class="col">
                        <div class="form-group mt-2">
                                <input type="text" name="tahun" class="form-control " placeholder="Tahun" value="{{$mobil->tahun}}">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="nopol" class="form-control " placeholder="Nomor Polisi" value="{{$mobil->nopol}}">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="harga_sewa_jam" class="form-control" placeholder="Harga Sewa/Jam" value="{{$mobil->harga_sewa_jam}}">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="harga_sewa_hari" class="form-control " placeholder="Harga Sewa/Hari" value="{{$mobil->harga_sewa_hari}}">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-user" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
