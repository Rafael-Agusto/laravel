@extends('layouts.main')
@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <main class="form-registration">
                <h2 class="text-center my-2">Register :</h2>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating ">
                    <input type="text" name="name" class="form-control rounded-top
                    @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old("name") }}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control
                        @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old("email") }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom
                        @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>

                        <label for="password">Password</label>

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small class='d-block text-center mt-2'>Already Registered?</small>
                <small class='d-block text-center'><a class='text-decoration-none' href="/login">Login</a></small>
            </main>
        </div>
    </div>
@endsection

