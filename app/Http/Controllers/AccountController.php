<?php

namespace App\Http\Controllers;

use App\Models\Socials;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $data = [
            'user' => User::where('id', auth()->user()->id)->first(),
            'facebook' => Socials::where(['user'=> auth()->user()->id, 'type_socials' => 'facebook'])->first(),
            'twitter' => Socials::where(['user'=> auth()->user()->id, 'type_socials' => 'twitter'])->first(),
            'linkedin' => Socials::where(['user'=> auth()->user()->id, 'type_socials' => 'linkedin'])->first(),
        ];
        return view('account', $data);
    }

    public function update(){
        $validateData = request()->validate([
            'nama' => 'required|max:255|min:3',
            'username' => 'required|max:255|min:3',
            'email' => 'required|max:255|email:dns',
            'telp' => 'required|max:255|min:3',
        ]);
        $user = User::find(auth()->user()->id);
        $user->nama = $validateData['nama'];
        $user->telp = $validateData['telp'];
        $user->email = $validateData['email'];
        $user->username = $validateData['username'];
        $user->save();

        $facebook = request()->input('facebook');
        $twitter = request()->input('twitter');
        $linkedin = request()->input('linkedin');
        if($facebook){
            $socials =  Socials::find(['user'=> auth()->user()->id, 'type_socials' => 'facebook']);
            if($socials){
                dd('ada');
            } else {
                dd($socials);
            }
        }
        return redirect('/account');
    }

    public function tags()
    {
        return view('tags/tags');
    }
}
