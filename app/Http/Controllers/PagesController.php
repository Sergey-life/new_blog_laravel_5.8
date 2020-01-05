<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\createPostRequest;
class PagesController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        $posts = Post::all();

        return view('index', ['posts' => $posts]);
    }

    public function article($id)
    {
        $myPost = Post::find($id);

        return view('article', ['post' => $myPost]);
    }

    public function adminPanel()
    {
        $posts = Post::all();

        return view('admin.admin-panel', ['posts' => $posts]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(CreatePostRequest $request)
    {

        Post::create($request->all());

        return redirect()->route('posts.admin');
    }

    public function edit($id)
    {
        $myPost = Post::find($id);

        return view('admin.edit', ['post' => $myPost]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'subject' => 'required',
            'hort_description' => 'required',
            'author' => 'required',
            'text' => 'required'
        ]);

        $myPost = Post::find($id);

        $myPost->fill($request->all());
        $myPost->save();

        return redirect()->route('posts.admin');
    }

    public function show($id)
    {
        $myPost = Post::find($id);

        return view('admin.show', ['post' => $myPost]);
    }

    public function destroy($id)
    {
        Post::find($id)->delete();

        return redirect()->route('posts.admin');
    }
}
