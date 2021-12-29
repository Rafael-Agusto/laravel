@extends('layouts.main')
@section('container')

<form action='{{ url('mypost/edit',$posts->id) }}' method='POST'>
    @csrf
    <p class="mt-5">Judul :</p>
    <div class="form-floating">
        {{-- autofocus=set langsung aktif --}}
        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
        id="judul" value = '{{ old('judul',$posts->judul) }}' required>
        <label for="judul"></label>
        @error('judul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <p class="mt-2">Slug :</p>
    <div class="form-floating">
        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror"
        id="slug" value = '{{ old('slug',$posts->slug) }}' readonly required>
        <label for="slug"></label>
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <p class="mt-2">Isi :</p>
    <div class="form-floating">
        <input type="text" name="isi" class="form-control @error('isi') is-invalid @enderror"
        id="isi"  value = '{{ old('isi',$posts->isi) }}' required >
        <label for="isi"></label>
        @error('isi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Update</button>
</form>

@endsection
