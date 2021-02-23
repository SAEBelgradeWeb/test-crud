@extends('layouts.app')

@section('main')

    <div class="container">
        <div class="row">
            <div class="col-9">
                <h1>{{$post->title}}</h1>

            </div>

            <div class="col-3">
                <h6>Category: {{$post->category->title}}</h6>
                <h6>Author: {{$post->user->name}}</h6>
                <h6>Published on {{$post->created_at}}</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div>{!! $post->body  !!}</div>
            </div>
        </div>
    </div>
@endsection
