@extends('layout.app')
@section('title','tambah-mobil')
@section('content')

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="card shadow mb-4">
    <div class="d-sm-flex  card-header py-3 justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Mobil</h6>
    </div>
    <div class="card-body">

        <!-- Outer Row -->
        <div class="col-lg-12">
            <div class="p-5">
                <form action="/tambah-mobil" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group mt-2">
                                <input type="text" name="type" class="form-control" placeholder="Type">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="merk" class="form-control " placeholder="Merk">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="jumlah_kursi" class="form-control" placeholder="Jumlah Kursi">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="bahan_bakar" class="form-control " placeholder="Bahan Bakar">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="warna" class="form-control " placeholder="Warna">
                            </div>

                        </div>
                        <div class="col">
                        <div class="form-group mt-2">
                                <input type="text" name="tahun" class="form-control " placeholder="Tahun">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="nopol" class="form-control " placeholder="Nomor Polisi">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="harga_sewa_jam" class="form-control" placeholder="Harga Sewa/Jam">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="harga_sewa_hari" class="form-control " placeholder="Harga Sewa/Hari">
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
