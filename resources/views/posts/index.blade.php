{{--@extends('layouts.app')--}}

{{--@section('main')--}}
    @foreach($posts as $post)
    {{$post->title}}<br>
    @endforeach
{{--@endsection--}}
