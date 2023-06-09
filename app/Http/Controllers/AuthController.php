<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function simpan(Request $request)
    {
        User::create([
            'nik_user' => $request->nik_user,
            'nama_user' => $request->nama_user,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/');
    }
    public function login()
    {
        return view('/login');
    }
    public function ceklogin(Request $request)
    {
        if (
            !Auth::attempt([
                'nama_user' => $request->nama_user,
                'password' =>
                $request->password
            ])
        ) {
            return redirect('/')->with('flash_error', 'Username atau Passoword
        Anda salah');
        } else {
            return redirect('/home')->with('flash_login', 'Anda Berhasil
        Login');
        }
    }
    public function home()
    {
        return view('home', ['key' => 'home'])->with('flash_login', 'Anda Berhasil Login');
    }
    public function logout()
    {
        Auth::logout();
        return view('/login');
    }
}