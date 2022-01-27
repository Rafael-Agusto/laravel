@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-md-3">
        <h1 class="h3 fw-normal">Forgot Password ?</h1>
        <form action='/forgot-password' method='post'>
            @csrf
            {{-- csrf = pengamanan --}}
            <p>Masukan Email :</p>
            <div class="form-floating">
                {{-- autofocus=set langsung aktif --}}
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                id="email" placeholder="Email" value = '{{ old('email') }}' required>
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <p class="mt-2">Masukan Password Baru :</p>
                <div class="form-floating">
                    {{-- autofocus=set langsung aktif --}}
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Change Password</button>
                </form>
            </div>
        </div>
        @endsection
