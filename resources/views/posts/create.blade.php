@extends('layouts.main')
@section('container')
<form action='/posts/create' method='post'>
    @csrf
    {{-- csrf = pengamanan --}}
    <p class="mt-5">Judul :</p>
    <div class="form-floating">
        {{-- autofocus=set langsung aktif --}}
        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
        id="judul" placeholder="Email" value = '{{ old('judul') }}' required>
        <label for="judul"></label>
        @error('judul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <p class="mt-2">Slug :</p>
    <div class="form-floating">
        {{-- autofocus=set langsung aktif --}}
        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror"
        id="slug" required>
        <label for="slug"></label>
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <p class="mt-2">Isi :</p>
    <div class="form-floating">
        {{-- autofocus=set langsung aktif --}}
        <input type="text" name="isi" class="form-control @error('isi') is-invalid @enderror"
        id="isi" required>
        <label for="isi"></label>
        @error('isi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Post</button>
</form>
@endsection
