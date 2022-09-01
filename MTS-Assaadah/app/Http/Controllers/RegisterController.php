<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    // function index ini berfungsi untuk menampilkan halaman index dari folder hello/register/index
    public function  register()
    {
        return view('page.register');
    }

    // function store ini berfungsi untuk mengirim data inputan kedalam database
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'nisn' => 'required',
            'nis' => 'required',
            'tpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required'
            
        ]);

        

        User::create($validateData);

        return redirect('/register')->with('success', 'Registrasi berhasil! , silahkan Login');
    }
}
