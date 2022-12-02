@extends('layouts.main')
@section('content')
    <div class="container d-flex align-items-center justify-content-center vh-100 ">
        <div class="" style="width: 50%; margin: auto;">
            @if (session('success'))
                <script>
                    Swal.fire(
                        'Berhasil Membuat Akun !! Silahkan Login Terlebih Dahulu',
                        '',
                        'success'
                    )
                </script>
            @endif
            @if (session('notAllowed'))
                <script>
                    Swal.fire(
                        'Silahkan Login Terlebih Dahulu',
                        '',
                        'error'
                    )
                </script>
            @endif
            @if (session('error-login'))
                <script>
                    Swal.fire(
                        'Password Salah !!',
                        '',
                        'success'
                    )
                </script>
            @endif
            @if (session('logout'))
                <script>
                    Swal.fire(
                        'Berhasil Logout ',
                        '',
                        'success'
                    )
                </script>
            @endif

            <form class="" action="{{ route('login.auth') }}" method="POST">
                @csrf
                {{-- <div class="container"> --}}
                    <div class="card-body shadow bg-white" style="padding:100px 50px; border-radius:50px;">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <h3 class="mb-5 text-center">Login</h3>
                        <div class="col-auto">
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
                            <label class="visually-hidden" for="password">Password</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <box-icon name='lock'></box-icon>
                                </div>
                                <input type="password" class="form-control" id="password" placeholder="password"
                                    name="password">
                            </div>
                        </div>
                        <div class="mt-4 col-auto"> <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('register') }}">Belum punya akun?</a>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
