@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12">
                <article class='mt-2'>
                    @if ($post->image)
                    <div stle="max-height: 350px;overflow:hidden;">
                        <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="{{ $post->kategori->nama }}">
                    </div>
                    @else
                    <img src="https://source.unsplash.com/800x200/?{{ $post->kategori->nama }}" class="card-img-top" alt="{{ $post->kategori->nama }}">
                    @endif
                    <h3 href="/posts/{{ $post->slug }}">Barang : {{ $post->barang }}</h3>
                    <h4>Kategori : <a href='/posts?kategori={{ $post->kategori->slug }}' class='text-decoration-none'>{{ $post->kategori->nama }}</a></h4>
                    <h4>Author :<a href='/posts?user={{ $post->user->name }}' class='text-decoration-none'> {{ $post->pengguna->username }}</a></h3>
                    <h4>Keterangan : {{ $post->keterangan }}</h5>
                    <a href='/posts'>Back</a>
                </article>
            </div>
        </div>
    </div>
@endsection