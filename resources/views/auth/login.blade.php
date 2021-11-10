@extends('layouts.app')
@section('content')
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="container">
                    <main class="form-login">
                        <form action="/login" method="POST">
                           @csrf
                            <h1 class="h3 mb-3 fw-normal">Login</h1>

                            <div class="form-floating">
                                <input type="email" name="email @error('email') is-invalid @enderror" class="form-control mt-2" id="email" placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control mt-2 @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
                            
                        </form>
                        <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Register</a></small>
                    </main>
                </div>
            </div>
        </div>
@endsection
