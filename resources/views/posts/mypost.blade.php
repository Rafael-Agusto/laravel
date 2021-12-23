@extends('layouts.main')
@section('container')
<h4 class="mx 4 my-5">Post By : {{ auth()->user()->name }}</h4>
@foreach ($posts as $post)
<div class="mx-4 my-2 col-md-10 content-center">
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <small>
                    <form action="mypost/edit" method="post">
                        @csrf
                        <input type="hidden" value="{{ $post->slug }}" name="slug">
                        <button type="submit">
                        <i class="bi bi-eraser">edit</i>
                        </button>
                    </form>
                </small>
                <small>
                    <form action="mypost/delete" method="post">
                        @csrf
                        <input type="hidden" value="{{ $post->id }}" name="id">
                        <button type="submit">
                        <i class="bi bi-eraser">delete</i>
                        </button>
                    </form>
                </small>
                <h5 class="card-title" name="judul">{{ $post->judul }}</h5>
                <h4 name="isi">{{ $post->isi }}</h4>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
