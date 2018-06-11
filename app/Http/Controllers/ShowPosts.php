<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowPosts extends Controller
{
    //
    public function index()
    {
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->paginate(10);
        $id = DB::table('posts')->get(['author']);

        return view('post.index', ['posts' => $posts]);
    }

    public function getPost($id){
        $post = Post::find($id);
        $names = User::where('id',$id)->get(['name']);
        return view('post/showpost', ['post' => $post , 'names'=>$names]);
    }
}
