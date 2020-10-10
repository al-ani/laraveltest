
@extends('layouts.main')

@section('title', 'Page Title')

    {{-- @section('sidebar')
    @parent

    @endsection --}}

@section('content')
    <form action="/dashboard/store" method="post">
        @csrf
        @method("put")
        <div class="form-group">
            <label for="email">title</label>
            <input name="title" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"
                value={{ $book->name }}>
            @if ($errors->has('title'))
                <small id="titleHelp" class="form-text text-muted">{{ implode(', ', $errors->get('title')) }}</small>
            @endif
        </div>
        <div class="form-group">
            <label for="auther">Auther</label>
            <input name="auther" class="form-control" id="auther" aria-describedby="emailHelp" placeholder="Enter email"
                value={{ $book->auther }}>
            @if ($errors->has('auther'))
                <small id="titleHelp" class="form-text text-muted">{{ implode(', ', $errors->get('auther')) }}</small>
            @endif
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input name="year" class="form-control" id="year" aria-describedby="year" placeholder="Enter email"
                value={{ $book->year }}>
            @if ($errors->has('year'))
                <small id="titleHelp" class="form-text text-muted">{{ implode(', ', $errors->get('year')) }}</small>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Primary</button>
    </form>
@endsection
