<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostIndexController extends Controller
{
    public function __invoke(Request $request){

        // $posts = $request->user()->posts()->latest()->get();

        return view('posts.index', [

            'posts' => Post::latest()->get(),
        ]);

    }
}
