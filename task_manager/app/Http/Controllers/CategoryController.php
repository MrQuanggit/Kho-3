<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index() {
        $categories = Category::all();
        return view('admin.categories.list', compact('categories'));
    }
    function getPostByCategoryId($id) {
        $posts = Category::findOrFail($id)->posts()->get();
        return redirect()->route('posts.index', compact('posts'));
    }
}
