@extends('layouts.main')
@section('container')
<form action='/ticket' method='post'>
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
    <p class="mt-2">Deskripsi :</p>
    <div class="form-floating">
        {{-- autofocus=set langsung aktif --}}
        <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
        id="deskripsi" required>
        <label for="deskripsi"></label>
        @error('deskripsi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Submit Ticket</button>
</form>
@endsection