@extends('layouts.main')
@section('container')
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
