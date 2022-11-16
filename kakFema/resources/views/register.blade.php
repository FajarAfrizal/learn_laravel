@extends('layouts.main')
@section('content')
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="form-control my-auto" style="width: 50%; margin:0 auto;">
            <div class="container py-5 h-100">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('register.input') }}" method="post">
                    @csrf
                    <h3 class="mb-5 text-center">Register</h3>

                    <div class="form-outline mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name"
                            name="name"aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('login') }}">Sudah punya akun?</a>
                </form>
            </div>
        </div>
    </div>
@endsection
