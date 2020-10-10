@extends('layouts.main')

@section('title', 'Page Title')

    {{-- @section('sidebar')
    @parent

    @endsection --}}

@section('content')
    <a type="button" class="btn btn-primary" href="dashboard/create">Add</a>
    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Auther</th>
                    <th scope="col">Year</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->auther }}</td>
                        <td>{{ $book->year }}</td>
                        <td><a href="/dashbaord/update" type="button" class="btn btn-secondary btn-sm">update</a>
                            <a type="button" class="btn btn-danger btn-sm">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
