@extends('layouts.main')
@section('container')
<h4 class="mx 4 my-5">Post By : {{ auth()->user()->name }}</h4>
@foreach ($posts as $post)
<div class="mx-4 my-2 col-md-10 content-center">
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <small><button><i class="bi bi-pencil"></i></button></small>
                <small><button action='/delete' method='post'><i class="bi bi-eraser"></i></button></small>
                <h5 class="card-title">{{ $post->judul }}</h5>
                <h4>{{ $post->isi }}</h4>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
