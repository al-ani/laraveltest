@extends('layouts.main')

@section('title', 'Posts')

@section('content')
@include('posts.list')
<form action="/posts/edit/{{$post->id}}" method="post" class="post-form">
    @csrf
    {{-- @method('put') --}}
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" class="form-control" id="title" value={{ $post->title }}>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input name="content" class="form-control" id="content" placeholder=""
            value={{ $post->content }}
        >
    </div>
    <div class="form-group">
        <label for="username">Your Name</label>
        <input name="username" class="form-control" id="username"
            value={{ $post->username }}
        >
    </div>
    <div class="form-group">
        <label for="year">Color</label>
        <select name="color" id="color" value={{$post->color}}>
            <option value="Yellow" selected={{$post->color=="Yellow"}}>Yellow</option>
            <option value="Purple" selected={{$post->color=="Purple"}}>Purple</option>
            <option value="Green" selected={{$post->color=="Green"}}>Green</option>
        </select>
    </div>
    <div class="form-group">
        <label></label>
        <button type="submit" class="button-submit">Submit</button>
    </div>
</form>
@endsection
