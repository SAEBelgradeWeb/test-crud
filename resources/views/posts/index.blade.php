@extends('layouts.app')

@section('main')
{{--    @foreach($posts as $post)--}}
{{--    {{$post->title}}<br>--}}
{{--    @endforeach--}}
    <div class="row">
        <div class="col-12 m-5">
            <a href="/posts/create" class="btn btn-warning">Add new post</a>
        </div>
    </div>
    <table class="table table-striped table-hover m-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>User</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category->title}}</td>
                <td>

                    <form action="/posts/{{$post->id}}" method="POST">
                        @csrf
                        <a href="/posts/{{$post->id}}" class="btn btn-primary">Show</a>
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
