<?php

namespace App\Http\Controllers;

use App\Helpers\Jotter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
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
        $validateData['password'] = Hash::make($request->input('password'));
        $id = Jotter::makeid(10, 'ACC', 'users' );
        $data = new User;
        $data->id = $id;
        $data->nama = $validateData['nama'];
        $data->email = $validateData['email'];
        $data->username = $validateData['username'];
        $data->password = $validateData['password'];
        $data->tgl_terbuat = Carbon::now()->isoFormat('YYYY-MM-DD');
        $data->wkt_terbuat = Carbon::now()->format('H:i:m');
        $data->status = 'aktif';
        $data->role = 'reader';
        $data->save();
        return redirect('/login');
    }
}
