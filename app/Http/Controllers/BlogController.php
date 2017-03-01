<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
       // $posts = Post::orderBy('created_at', 'desc')->limit(6)->get();
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);
        return view('blog.index')->withPosts($posts);
    }
    
    public function single($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();
        
        return view('blog.single')->withPost($post);
    }
}
