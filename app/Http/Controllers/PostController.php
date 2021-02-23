<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $users = User::all();

        return view('posts.create', compact('categories', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|unique:posts,title',
            'body' => 'required'
        ]);

        Post::create($request->all());
        return redirect('/posts');
    }

    public function delete($id)
    {
        Post::destroy($id);

        return redirect()->back();
    }
}
