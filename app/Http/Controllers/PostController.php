<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
      $posts = Post::where('showActive', 1)->latest()->paginate(5);
      return view('posts.index', compact('posts'));
    }

    public function create()
    {
      return view('posts.create');
    }

    public function store(Request $request)
    {
      $post = new Post();
      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->showActive = $request->input('active');
      $post->commentsActive = $request->input('comments');
      $post->user_id = Auth::user()->id;
      $post->cat_id = 1;
      $post->save();
      return redirect()->route('posts.show', $post->id);
    }

    public function show($id)
    {
      $post = Post::find($id);
      return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
      $post = Post::find($id);
      return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->name = $request->input('name');
        $post->save();

        return redirect()->route('posts.show', $id);
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('/');
    }
}
