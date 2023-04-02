<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function all()
    {
        return view('posts.index', [
            'posts' => Post::take(8)->get()
        ]);
    }
}
