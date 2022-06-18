<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at',"DESC")->paginate(3);
        return view('posts.index',compact("posts"));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show',compact("post"));
    }

}