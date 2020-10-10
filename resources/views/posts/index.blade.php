@extends('layouts.main')

@section('title', 'Posts')

@section('content')
    @include('posts.list')
    <form action="/posts" method="post" class="post-form">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input name="title" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input name="content" class="form-control" id="content" placeholder="">
        </div>
        <div class="form-group">
            <label for="username">Your Name</label>
            <input name="username" class="form-control" id="username">
        </div>
        <div class="form-group">
            <label for="year">Color</label>
            <select name="color" id="color">
                <option value="Yellow">Yellow</option>
                <option value="Purple">Purple</option>
                <option value="Green">Green</option>
            </select>
        </div>
        <div class="form-group">
            <label></label>
            <button type="submit" class="button-submit">Submit</button>
        </div>
    </form>
@endsection
