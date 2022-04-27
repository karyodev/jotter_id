<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tags;
use App\Models\User;
use App\Helpers\Jotter;
use App\Models\Blog;
use App\Models\Post_tags;
use App\Models\Blog_tags;
use App\Models\Socials;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AccountController extends Controller
{
    // ACCOUNT
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

    // CONTENT
    public function content(){
        $data = [
            'user' => User::where('id', auth()->user()->id)->first(),
            'tags' => Tags::where('status_tags', 'aktif')->orderBy('name_tags', 'ASC')->get(),
        ];
        return view('post/content', $data);
    }

    public function created_content(){
        $tags = request()->input('tags');
        if($tags){
            $validateData = request()->validate([
                'title' => 'required|min:3',
                'content' => 'required|min:3',
            ]);
            $id = Jotter::makeid(10, 'BLOG', 'blogs' );
            $data = new Blog;
            $data->id = $id;
            $data->user = auth()->user()->id;
            $data->title = $validateData['title'];
            $data->post = $validateData['content'];
            $data->type_blogs = 'FREE';
            $data->status_blogs = 'Publish';
            $data->created_blogs = Carbon::now();
            $data->save();

            $n = count($tags);
            for ($i=0; $i < $n ; $i++) { 
                $id_pt = Jotter::makeid(10, 'BT', 'blog_tags' );
                $data = new Blog_tags;
                $data->id = $id_pt;
                $data->blog_id = $id;
                $data->tags_id = $tags[$i];
                $data->created_blog_tags = Carbon::now();
                $data->save();
            }
        }
        return redirect('/content');
    }

    // POST
    public function post(){
        $data = [
            'user' => User::where('id', auth()->user()->id)->first(),
            'blogs' => Blog::where(['user' => auth()->user()->id ])->orderBy('created_blogs', 'DESC')->get(),
        ];
        return view('post/post', $data);
    }

    public function detailpost(){
        if(request()->session()->has('post')){
            $id = request()->session()->pull('post');
            request()->session()->put('post', $id);
            $data = [
                'blogs' => Blog::join('users', 'users.id', '=', 'blogs.user')->where('blogs.id', $id)->first(),
                'tags' => Post_tags::join('tags', 'tags.id', '=', 'post_tags.tags')->where('blogs', $id)->orderBy('name_tags', 'ASC')->get(),
            ];
            return view('blog-detail', $data);
        } else {
            return redirect('/post');
        }
    }

    public function findpost($id){
        request()->session()->put('post', $id);
        return redirect('detailpost');
    }

    // TAGS
    public function tags()
    {
        $data = [
            'user' => User::where('id', auth()->user()->id)->first(),
            'tags' => Tags::where('status_tags', 'aktif')->orderBy('name_tags', 'ASC')->get(),
        ];
        return view('tags/tags', $data);
    }
}
