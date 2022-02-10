<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $isi = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        if(Auth::attempt($isi)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('LoginGagal', 'Login Failed');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }

    public function register(Request $request){
        $validateData = $request->validate([
            'nama' => 'required|max:255|min:3',
            'username' => 'required|max:255|min:3|unique:users',
            'email' => 'required|max:255|email:dns|unique:users',
            'password' => 'required|max:255|min:3',
        ]);
        User::create($validateData);
    }
}
