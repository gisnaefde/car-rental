@extends('layout.app')
@section('title','info')

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
        <h6 class="m-0 font-weight-bold text-primary">Info</h6>
    </div>
    <div class="m-4">
        @foreach($info as $item)
        <div class='row'>
            <div class=" col-md-4">
                <div class="ml-4 mb-2 font-weight-bold row"> Info</div>
                <div class="ml-4 mb-2 font-weight-bold row"> No Admin</div>
                <div class="ml-4 mb-2 font-weight-bold row"> Syarat dan Ketentuan</div>
                <div class="ml-4 mb-2 font-weight-bold row"> Lokasi</div>
                <div class="ml-4 mb-2 font-weight-bold row"> Procedure</div>
            </div>
            <div class="col-md-8">
                <div class="ml-3 mb-2 text-capitalize row">: {{$item->info}}</div>
                <div class="ml-3 mb-2 text-capitalize row">: {{$item->no_admin}}</div>
                <div class="ml-3 mb-2 text-capitalize row">: {{$item->sdk}}</div>
                <div class="ml-3 mb-2 text-capitalize row">: {{$item->lokasi}}</div>
                <div class="ml-3 mb-2 text-capitalize row">: {{$item->procedure}}</div>
            </div>
        </div>
        <a href="/info-edit/{{$item->id}}" class="btn btn-primary btn-user mt-4 ml-4" type="submit">Edit</a>
        @endforeach
        <p></p>
    </div>
</div>
@endsection

@section('script')
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>
@endsection
