@extends('layouts.main')
@section('container')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show my-3" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<h4 class="centered">Assignment</h4>
@foreach ($requests as $req)

<div class="mx-4 my-2 col-md-10 content-center ">
    <div class="card-group">
        <div class="card bg-color:primary">
            <div class="card-body">
                <form action="">
                    @csrf
                    <h4 class="card-title">{{ $req->judul }}</h4>
                    <small>Requested by {{ $req->user->name }}</small>
                    <h4 class="mb-2">{{ $req->deskripsi }}</h4>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
