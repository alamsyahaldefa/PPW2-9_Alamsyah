<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class Pertemuan9Controller extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }
    public function register(){
        return view('porto.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->input('name'), // Memastikan 'name' berada di dalam tanda kutip
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);        

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
        ->withSuccess('Berhasil!');
    }
    public function login(){
        return view('porto.login');
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('dashboard')->withSuccess('Berhasil!');
        }
        return back()->withErrors([
            'email' => 'Tidak cocok!'
        ])->onlyInput('email');
    }
    public function dashboard(){
        if(Auth::check()){
            return view('porto.dashboard');
        }
        return redirect()->route('login')
        ->withErrors([
            'email' => 'Login dulu!'
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('Berhasil!');;
    }  
}
