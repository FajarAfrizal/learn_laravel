<?php

namespace App\Http\Controllers;

use App\Models\todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('register');
    }
    public function index()
    {
        return view('login');
    }
    public function registerAccount(Request  $request)
    {
        $request->validate([
            'email'=>'required|email:dns|max:225',
            'password'=> 'required|min:4',
            'username'=> 'required|min:4|max:20',
            'name'=> 'required|min:3',
        ]);
        user::create([
            'name' => $request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
        ]);
        return redirect()->route('login')->with('success', 'berhasil menambahkan akun ! silahkan login');
        // dd($request->all());
    }
    public function auth(Request $request)
    {
        $check = $request->validate([
            'username'=>'required|exists:users,username',
            'password'=> 'required',
        ],
        [
            'username.exists' => 'username belum tersedia',
            'username.required'=> 'username harus diisi',
            'password.required' => 'password harus diisi',
            
        ]);
        if(Auth::attempt($check)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return redirect()->route('login')->with('error-login', 'Invalid username or password!');
    }
    public function indexes()
    {
        $todo = todo::all();
        return view('dashboard.index', compact('todo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(todo $todo)
    {
        //
    }
}
