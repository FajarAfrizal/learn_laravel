@extends('layouts.main')
@section('content')
    <div class="container d-flex align-items-center justify-content-center vh-100 ">
        <div class="" style="width: 50%; margin:0 auto;">
            <div class="container py-5 h-100">
                <form action="{{ route('register.input') }}" method="post">
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
                    <div class="container">
                        <div class="card-body shadow  bg-white" style="padding:100px 50px; border-radius:50px;">
                            <h3 class="mb-5 text-center">Register</h3>

                            <div class="col-auto mt-2">
                                <label class="visually-hidden" for="password">Nama Lengkap</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <box-icon type='solid' name='user-detail'></box-icon>
                                    </div>
                                    <input type="text" class="form-control" id="name" placeholder="Nama Lengkap"
                                        name="name">
                                </div>
                            </div>

                            <div class="col-auto mt-2">
                                <label class="visually-hidden" for="username">Username</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <box-icon type='solid' name='user'></box-icon>
                                    </div>
                                    <input type="text" class="form-control" id="username" placeholder="Username"
                                        name="username">
                                </div>
                            </div>
                            <div class="col-auto mt-2">
                                <label class="visually-hidden" for="password">Email Address</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <box-icon name='envelope'></box-icon>
                                    </div>
                                    <input type="email" class="form-control" id="email" placeholder="email"
                                        name="email">
                                </div>
                            </div>


                            <div class="col-auto mt-2">
                                <label class="visually-hidden" for="password">Password</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <box-icon name='lock'></box-icon>
                                    </div>
                                    <input type="password" class="form-control" id="password" placeholder="password"
                                        name="password">
                                </div>
                            </div>
                            <div class="mt-4 col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('login') }}">Sudah punya akun?</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
