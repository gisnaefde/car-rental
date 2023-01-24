@extends('layout.app')
@section('title','edit-info')
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
    <div class="d-sm-flex  card-header py-3 justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Edit Info</h6>
    </div>
    <div class="card-body">

        <!-- Outer Row -->
        <div class="col-lg-12">
            <div class="p-5">
                <form action="/info-edit/{{$info->id}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col">
                            <div class="form-group mt-2">
                                <input type="text" name="info" class="form-control" placeholder="Info" value="{{$info->info}}">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="no_admin" class="form-control " placeholder="No Admin" value="{{$info->no_admin}}">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="sdk" class="form-control" placeholder="Syarat dan Ketentuan" value="{{$info->sdk}}">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="lokasi" class="form-control " placeholder="Lokasi" value="{{$info->lokasi}}">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="procedure" class="form-control " placeholder="Procedure" value="{{$info->procedure}}">
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
