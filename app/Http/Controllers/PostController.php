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

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $users = User::all();

        return view('posts.edit', compact('post', 'categories', 'users'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|unique:posts,title',
            'body' => 'required'
        ]);
        Post::where('id', $id)
            ->update($request->except(['_method', '_token']));
        return redirect('/posts');

    }

    public function delete($id)
    {
        Post::destroy($id);

        return redirect()->back();
    }
}
