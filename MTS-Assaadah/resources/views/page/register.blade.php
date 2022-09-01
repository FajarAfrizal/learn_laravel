@extends('layouts.main')
@section('container')
        <div class="row justify-content-center">
            <div class="col-lg-5">
                {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="container" >
                    <main class="form-register">
                        <form action="/register" method="POST">
                           @csrf
                            <h1 class="h3 mb-3 fw-normal" style="text-align: center; color: white;" > PENDAFTARAN SISWA BARU </h1>

                            <div class="form-floating">
                                <input type="text" name="name" class="form-control mt-2" id="name" placeholder="name">
                                <label for="name">Name</label>
                            </div>
                            <div class="">
                                <select name="jenis_kelamin" id="myselect" placeholder="JENIS KELAMIN"> 
                                        <option value="LAKI-LAKI">LAKI - LAKI</option>
                                        <option value="PEREMPUAN" selected='selected'>Perempuan</option>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="nisn" class="form-control mt-2" id="nisn" placeholder="NISN">
                                <label for="NISN"></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="nis" class="form-control mt-2" id="nis" placeholder="NIS">
                                <label for="NISN">NIS</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="tpt_lahir" class="form-control mt-2" id="tpt_lahir" placeholder="TEMPAT LAHIR">
                                <label for="tpt_lahir">TEMPAT LAHIR</label>
                            </div>
                            <div class="form-floating">
                                <input type="date" name="tgl_lahir" class="form-control mt-2" id="tgl_lahir" placeholder="Tanggal Lahir">
                                <label for="tgl_lahir">Tanggal lahir</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="agama" class="form-control mt-2" id="agama" placeholder="AGAMA">
                                <label for="agama">AGAMA</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit" style="background-color: red;">Submit</button>
                            
                        </form>
                        <small class="d-block text-center mt-3" style="color: white;">Silahkan Masukan Data Anda</small>
                    </main>
                </div>
            </div>
        </div>
    </div>

@endsection