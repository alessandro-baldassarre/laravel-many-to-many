<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\User;
use Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(20);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['slug'] = Str::slug($request->title);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        $request->validate([
                "title" => "required|min:3|max:50",
                "description" => "required|min:15",
                "photo" => "required|min:5",
            ],
            [
                "required" => "Non puoi inserire un Post senza :attribute.",
            ]
        );


        $newPost = new Post();
        $newPost->fill($data);
        $newPost->save();

        return redirect()->route('admin.posts.show', $newPost);
    }

    /**
     * Display the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {
        $request['slug'] = Str::slug($request->title);

        $data = $request->all();

        $request->validate([
                "title" => "required|min:3|max:50",
                "description" => "required|min:15",
                "photo" => "required|min:5",
            ],
            [
                "required" => "Non puoi inserire un Post senza :attribute.",
            ]
        );

        $post->update($data);
        return redirect()->route('admin.posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')
        ->with('deleted-message', "$post->title è stato eliminato con successo.");
    }
}
