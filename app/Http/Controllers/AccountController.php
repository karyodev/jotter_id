<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Helpers\Jotter;
use App\Models\Socials;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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

        for($i=1; $i<=3; $i++){
            if($i==1){
                $socials = 'facebook';
                $input = request()->input('facebook');
            } elseif($i==2){
                $socials = 'twitter';
                $input = request()->input('twitter');
            } else {
                $socials = 'linkedin';
                $input = request()->input('linkedin');
            }
            if($input){
                $acc =  Socials::where(['user'=> auth()->user()->id, 'type_socials' => $socials])->first();
                if($acc){
                    $acc = Socials::find($acc->id);
                    $acc->username_acc = $input;
                    $acc->save();
                } else {
                    $id = Jotter::makeid(10, 'SCL', 'socials' );
                    $data = new Socials;
                    $data->id = $id;
                    $data->user = auth()->user()->id;
                    $data->type_socials = $socials;
                    $data->username_acc = $input;
                    $data->created_socials = Carbon::now();
                    $data->status = 'aktif';
                    $data->save();
                }
            }
        }
        return redirect('/account');
    }

    public function tags()
    {
        return view('tags/tags');
    }
}
