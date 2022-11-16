@extends('layouts.main')
@section('content')
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="form-control my-auto" style="width: 50%; margin:0 auto;">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form class="m-5" action="{{ route('login.auth') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('error-login'))
                    <div class="alert alert-danger">
                        {{ session('error-login') }}
                    </div>
                @endif
                <h3 class="mb-5 text-center">Login</h3>
                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('register') }}">Belum punya akun?</a>
            </form>
        </div>
    </div>
@endsection
