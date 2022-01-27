@extends('layouts.main')
@section('container')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show my-3" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="mx-4 my-2 col-md-10 content-center ">
@foreach ($requests as $req)
    <div class="card-group my-4">
        <div class="card bg-color:primary">
            <div class="card-body">
                <h4 class="card-title">{{ $req->judul }}</h4>
                <small class ="mb-3">Requested by {{ $req->user->name }}</small>
                <h5 class = "mb-2">Deskripsi : </h5>
                <h6 class ="mb-3">{{ $req->deskripsi }}</h6>
                <h4>{{ $req->karyawan_id }}</h4>
                <form action="/manage-ticket" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$req->id}}">
                    <div class="dropdown mt-1">
                        <select name="karyawan_id" id="karyawan_id" class="form-select" aria-label="Default select example">
                            <option selected>Pilih Karyawan</option>
                            @foreach ($karyawan as $kar)
                            <option value="{{$kar->id}}">{{$kar->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="mt-3" type="submit">Assign</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    @endsection
