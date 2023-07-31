<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostDestroyController extends Controller
{
    public function __invoke(Request $request, Post $post){


        // $request->user()->posts()->find($post)->first()->delete();

        $this->authorize('delete', $post);

        $post->delete();

        return back();

    }
}
