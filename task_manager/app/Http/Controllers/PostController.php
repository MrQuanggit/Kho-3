<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index() {
        $posts = Post::all();
        return view('admin.posts.list', compact('posts'));
    }
    function search(Request $request) {

    }
}
