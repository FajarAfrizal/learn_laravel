<?php

namespace App\Http\Controllers;

use App\Models\todo;
use App\Models\User;
use Carbon\Carbon;
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

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('logout', 'berhasil logout');
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
            return redirect()->intended('/dashboard')->with('success', 'Berhasil Login');
        }
        return redirect()->route('dashboard')->with('error-login', 'Invalid username or password!');
    }
    public function indexes()
    {
        $todo = todo::where('user_id', '=', Auth::user()->id)->get();
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
         $request->validate([
            'title' => 'required|min:3',
            'date' => 'required',
            'description' => 'required|min:5'
        ]);
        todo::create([
            'title' => $request->title,
            'date' => $request->date,
            'description' => $request->description,
            'status' => 0,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('dashboard')->with('success-create', 'Berhasil Menambahkan');
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
    public function edit(todo $todo, $id)
    {
        $todos = todo::where('id', $id)->first();
        return view('dashboard.edit', compact('todos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todo $todo, $id)
    {   
        $update = $request->validate([
            'title' => 'required|min:3',
            'date' => 'required',
            'description' => 'required|min:5'
        ]);
        todo::where('id', $id)->update([
            'title' => $request->title,
            'date' => $request->date,
            'description' => $request->description,
            'status' => 0,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('dashboard')->with('success-update', 'Berhasil Menambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = todo::find($id);
        $todo->delete();
        return redirect()->route('dashboard')->with('success-delete', 'Behasil Menghapus');
    }

    public function complated()
    {
        return view('dashboard.complated');
    }

    public function updateComplated($id)
    {
        todo::where('id', '=', $id)->update([
            'status' => 1,
            'done_time' => \Carbon\Carbon::now()
        ]);
        return redirect()->back()->with('done', 'Todo telah berhasil di kerjakan');
    }
}
