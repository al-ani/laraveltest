<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Posts;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        return view('posts.index',compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'username' => 'required',
            'color' => 'required',
            'content' => 'required',
        ]);
  
        Posts::create($request->all());
   
        return redirect()->route('posts.index')
                        ->with('success','User created successfully.');
    }

    public function show($id)
    {
        $posts = Posts::all();
        $post = Posts::find($id);
        return view('posts.edit',compact('post', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  post$
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $post = Posts::find($id);
    //     return view('post.edit',compact('post','id'));
    // }

    public function update(Request $request, $id)
    {
        $post = Posts::find($id);
        $request->validate([
            'title' => 'required',
            'username' => 'required',
            'color' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());
  
        return redirect()->route('posts.index')
                        ->with('success','Posts updated successfully');
    }

    public function destroy($id)
    {
        $post=Posts::destroy($id);
  
        return redirect()->route('posts.index')
                        ->with('success','User deleted successfully');
    }
}
