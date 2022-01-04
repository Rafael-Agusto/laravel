@extends('layouts.main')
@section('container')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show my-3" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif 
<div class="mx-5 my-2">
    <form action="submit">
        <a href="export">Download Data Excel</a>
    </form>
    <form action="submit">
        <a href="/posts/pdf">Download Data PDF</a>
    </form>
</div>
@foreach ($posts as $post)
<div class="mx-4 my-2 col-md-10 content-center ">
    <div class="card-group">
        <div class="card bg-color:primary">
            <div class="card-body">
                <h5 class="card-title">{{ $post->judul }}</h5>
                <small>by {{ $post->user->name }}</small>
                <h4>{{ $post->isi }}</h4>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection