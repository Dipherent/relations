<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostStoreController extends Controller
{
    public function __invoke(Request $request){

        $this->validate($request, [
            'body' => ['required']
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();

    }
}
