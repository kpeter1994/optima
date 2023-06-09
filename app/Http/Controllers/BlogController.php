<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getIndex(){
        $posts = Post::paginate(10);

        return view('pages.blog')->withPosts($posts);

    }

    public function getSingle($slug) {
        $post = Post::where('slug', '=', $slug)->first();

        return view('pages.post')->with('post',$post);
    }
}
